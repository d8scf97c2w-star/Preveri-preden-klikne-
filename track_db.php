<?php

require __DIR__ . '/phish_session.php';

$pageSlug = 'login-submit';
require __DIR__ . '/phish_track_event.php';

$scenario = (
    isset($_POST['scenario']) && trim($_POST['scenario']) !== ''
)
    ? trim($_POST['scenario'])
    : 'default';

$user_group = (
    isset($_POST['user_group']) && trim($_POST['user_group']) !== ''
)
    ? trim($_POST['user_group'])
    : 'unknown';

try {
    if (!isset($pdo) || !($pdo instanceof PDO)) {
        throw new RuntimeException('PDO connection not available in track_db.php');
    }

    if (!empty($sessionToken)) {

        $update = $pdo->prepare("
            UPDATE phishing_sessions
            SET scenario   = :scenario,
                user_group = :user_group,
                last_seen  = NOW()
            WHERE session_token = :token
        ");
        $update->execute([
            ':scenario'   => $scenario,
            ':user_group' => $user_group,
            ':token'      => $sessionToken,
        ]);

        file_put_contents(
            __DIR__ . '/track_debug.log',
            date('c') .
            " - sessions updated: " . $update->rowCount() . "\n",
            FILE_APPEND
        );

        if ($update->rowCount() === 0) {
            $insert = $pdo->prepare("
                INSERT INTO phishing_sessions (session_token, user_group, scenario, created_at, last_seen)
                VALUES (:token, :user_group, :scenario, NOW(), NOW())
            ");
            $insert->execute([
                ':token'      => $sessionToken,
                ':scenario'   => $scenario,
                ':user_group' => $user_group,
            ]);

            file_put_contents(
                __DIR__ . '/track_debug.log',
                date('c') .
                " - sessions inserted: " . $insert->rowCount() . "\n",
                FILE_APPEND
            );
        }

    } else {
        file_put_contents(
            __DIR__ . '/track_debug.log',
            date('c') . " - WARNING: sessionToken is empty, no session updated/inserted\n",
            FILE_APPEND
        );
    }

} catch (Throwable $e) {
    error_log("PHISHING track_db ERROR: " . $e->getMessage());
}

header('Location: /phishing?scenario=' . urlencode($scenario));
exit;
