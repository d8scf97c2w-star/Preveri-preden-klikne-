<?php
require __DIR__ . '/phish_session.php';
$pageSlug = 'phishing-result';
require __DIR__ . '/phish_track_event.php';

$scenario = isset($_GET['scenario']) && $_GET['scenario'] !== ''
    ? trim($_GET['scenario'])
    : null;

$count = 0;

try {
    if (isset($pdo) && $pdo instanceof PDO) {

        if ($scenario !== null) {
            $stmt = $pdo->prepare("
                SELECT COUNT(DISTINCT e.session_token)
                FROM phishing_events e
                JOIN phishing_sessions s 
                  ON s.session_token = e.session_token
                WHERE e.page_slug = 'login-submit'
                  AND s.scenario = :scenario
            ");
            $stmt->execute([':scenario' => $scenario]);
            $count = (int)$stmt->fetchColumn();

            if ($count === 0) {
                $stmt = $pdo->prepare("
                    SELECT COUNT(DISTINCT session_token)
                    FROM phishing_events
                    WHERE page_slug = :slug
                ");
                $stmt->execute([':slug' => 'login-submit']);
                $count = (int)$stmt->fetchColumn();
            }

        } else {
            $stmt = $pdo->prepare("
                SELECT COUNT(DISTINCT session_token)
                FROM phishing_events
                WHERE page_slug = :slug
            ");
            $stmt->execute([':slug' => 'login-submit']);
            $count = (int)$stmt->fetchColumn();
        }
    }

} catch (PDOException $e) {
    error_log('PHISHING RESULT DB ERROR: ' . $e->getMessage());
    $count = 0;
}
?>
<!doctype html>
<html lang="sl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Phishing – ozaveščanje | NTF</title>

  <link rel="stylesheet" href="/style.css?v=1">
  <link rel="apple-touch-icon" sizes="180x180" href="MEDIA/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="MEDIA/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="MEDIA/favicon-16x16.png">
  <link rel="manifest" href="MEDIA/site.webmanifest">
</head>
<body>

  <div class="phish-wrap">
    <header class="phish-header">
      <img class="unlogo" src="MEDIA/logo-pok.svg" alt="Naravoslovnotehniška fakulteta">
    </header>

    <main class="phish-main">
      <article class="phish-card">

        <p class="phish-lead">
          Ups, pravkar si spregledal/a <br>znake spletne prevare.
        </p>

        <img src="MEDIA/phish-emoji.png" alt="Presenečeni emoji" class="phish-emoji">

         <div class="phish-stat">
            <div class="phish-stat-label">
              Nisi edini/a.
            </div>
            <div class="phish-stat-number">
              <?php echo $count; ?>
            </div>
            <div class="phish-stat-caption">
              NTF-jevcev je že naredilo isto napako kot ti.
            </div>
      </div>
      
         <p class="phish-reassure">
          Ne skrbi – e-poštni naslov in geslo, ki si ju vpisal/a,
          se nista shranila in ju nikjer ne beležimo.
        </p>

        <p>
          Phishing je oblika spletnega zavajanja, pri kateri napadalci
          posnemajo uradne spletne strani in s tem skušajo pridobiti osebne
          podatke uporabnikov.
        </p>

        <p>
          Ta simulacija phishinga je del izobraževalnega projekta
          Naravoslovnotehniške fakultete, namenjena ozaveščanju o
          varni rabi interneta.
        </p>

        <div class="phish-actions">
          <a href="/about" class="phish-btn phish-btn--light">
            O projektu
          </a>
         
          <a href="https://github.com/d8scf97c2w-star/Preveri-preden-klikne-.git" target="_blank" rel="noopener"
             class="phish-btn phish-btn--light phish-btn--code">
            Koda projekta
          </a>
          
          <a href="napake.pdf" target="_blank" rel="noopener"
             class="phish-btn phish-btn--outline">
            Poglej, kaj si zgrešil/a
          </a>
        </div>

        <p class="phish-subheading">
          Kako se zaščitiš?
        </p>
        <ul class="phish-list">
          <li>Vedno preveri naslov spletne strani (URL).</li>
          <li>Ne vpisuj gesel na straneh, do katerih si prišel prek povezav v e-pošti ali QR kodi.</li>
          <li>Uporabljaj preverjene in uradne povezave.</li>
          <li>Če dvomiš, preveri, preden klikneš!</li>
        </ul>
        <p class="phish-more-title">Dodatni viri:</p>
        <ul class="phish-links">
          <li>
            <a href="https://www.varninainternetu.si" target="_blank" rel="noopener">
              <span class="phish-link-main">VarninaInternetu.si</span>
              <span class="phish-link-url">www.varninainternetu.si</span>
            </a>
          </li>
          <li>
            <a href="https://safe.si" target="_blank" rel="noopener">
              <span class="phish-link-main">Safe.si</span>
              <span class="phish-link-url">www.safe.si</span>
            </a>
          </li>
        </ul>
        <br>
        <p class="phish-gdpr">
          Ta stran ne beleži, ne shranjuje in ne obdeluje nobenih osebnih
          podatkov, skladno z uredbo GDPR. Namenjena je izključno
          ozaveščanju in je popolnoma anonimna.
        </p>


      </article>
    </main>
  </div>

</body>
</html>