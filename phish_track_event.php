<?php

if (!isset($pdo) || !$pdo instanceof PDO) {
    return;
}

if (!isset($sessionToken) || !is_string($sessionToken)) {
    return;
}

if (!isset($pageSlug) || $pageSlug === '') {
    $pageSlug = 'unknown';
}

try {
    $stmt = $pdo->prepare("
      INSERT INTO phishing_events (session_token, page_slug, action)
      VALUES (:session, :page, 'view')
    ");
    $stmt->execute([
      ':session' => $sessionToken,
      ':page'    => $pageSlug,
    ]);
} catch (PDOException $e) {
    error_log("PHISH_EVENT DB ERROR: " . $e->getMessage());
}