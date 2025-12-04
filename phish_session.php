<?php
session_start();

if (!isset($_SESSION['phish_session'])) {
    $_SESSION['phish_session'] = bin2hex(random_bytes(16)); // random ID
}

$sessionToken = $_SESSION['phish_session'];

$dbHost = '';
$dbName = '';
$dbUser = '';
$dbPass = '';  

try {
    $dsn = "mysql:host=$dbHost;dbname=$dbName;charset=utf8mb4";
    $pdo = new PDO($dsn, $dbUser, $dbPass, [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ]);

    // 3) če ta session še ne obstaja v phishing_sessions, jo vpišemo
    $stmt = $pdo->prepare("SELECT id FROM phishing_sessions WHERE session_token = :token");
    $stmt->execute([':token' => $sessionToken]);
    $exists = $stmt->fetchColumn();

    if (!$exists) {
        $insert = $pdo->prepare("
            INSERT INTO phishing_sessions (session_token)
            VALUES (:token)
        ");
        $insert->execute([':token' => $sessionToken]);
    }

} catch (PDOException $e) {
    // ne blokiraj strani, samo zapiši napako v log
    error_log("PHISH_SESSION DB ERROR: " . $e->getMessage());
    // lahko po potrebi nastaviš $pdo = null;
}

