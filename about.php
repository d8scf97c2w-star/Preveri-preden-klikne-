<?php
require __DIR__ . '/phish_session.php';
$pageSlug = 'about';
require __DIR__ . '/phish_track_event.php';
?>
<!doctype html>
<html lang="sl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Preveri, preden klikneš! | O projektu</title>

  <link rel="stylesheet" href="/style.css?v=1">
  <link rel="apple-touch-icon" sizes="180x180" href="MEDIA/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="MEDIA/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="MEDIA/favicon-16x16.png">
  <link rel="manifest" href="MEDIA/site.webmanifest">
</head>
<body>

  <div class="about-wrap">
    <header class="about-header">
      <img class="unlogo" src="MEDIA/logo-pok.svg" alt="Naravoslovnotehniška fakulteta">
    </header>

    <main class="about-main">
      <p class="about-kicker">O projektu ozaveščanja o phishingu</p>
      <h1>Preveri, preden klikneš!</h1>

      <section class="about-section">
        <p>
          Z razvojem <strong>novih tehnologij in aplikacij</strong> se pojavljajo novi in
          kreativni načini <strong>kraje podatkov</strong>. Kraje podatkov same po sebi niso
          nov pojav, vendar se metode nenehno razvijajo in nadgrajujejo. Zaradi
          nepazljivosti in nevednosti posameznikov lahko hitro pride do zlorabe.
          Eden od takih načinov je <strong>phishing</strong>.
        </p>

        <p>
          <strong>Phishing</strong> ali ribarjenje za podatki je pogosta oblika
          <strong>kibernetske grožnje</strong>, pri kateri napadalci uporabljajo različne
          taktike, da bi posameznike zvabili k razkritju <strong>občutljivih informacij</strong>,
          kot so uporabniška imena, gesla ali finančni podatki. Ta vrsta kibernetskih
          napadov se pojavlja v različnih oblikah, vsaka s specifičnim pristopom in
          ciljem, pri čemer se taktike nenehno razvijajo. Napadalci pri tem
          izkoriščajo <strong>človeške ranljivosti</strong> in uporabljajo napredne pristope
          za prevaro posameznikov in organizacij.
          <span class="about-source-inline">
            Vir:
            <a href="https://doi.org/10.1109/ACCESS.2020.3048839" target="_blank" rel="noopener">
              Hijji &amp; Alam (2021), IEEE Access
            </a>
          </span>
        </p>

        <p>
          Po zadnjih javno dostopnih podatkih
          <strong>Nacionalnega odzivnega centra za kibernetsko varnost SI-CERT</strong> je
          <strong>sektor izobraževanja in raziskovanja</strong> med najbolj izpostavljenimi in
          pogosto ciljanimi področji <strong>kibernetskih napadov</strong> v Sloveniji. Pred
          kratkim je bil zabeležen tudi primer kibernetskega incidenta na
          <strong>Univerzi v Mariboru</strong>, kar dodatno izpostavlja pomen ozaveščanja
          in zaščite.
          <span class="about-source-inline">
            Vir:
            <a href="https://www.cert.si/letna_porocila/porocilo-o-kibernetski-varnosti-za-leto-2024/"
               target="_blank" rel="noopener">
              SI-CERT, Poročilo o kibernetski varnosti 2024
            </a>
          </span>
        </p>
      </section>

      <section class="about-section">
        <h2>Glavni namen</h2>
        <p>
          Glavni namen projektne naloge je preveriti, kako so
          <strong>zaposleni in študentje Naravoslovnotehniške fakultete</strong> pozorni na
          <strong>spletne prevare</strong>. Z raziskavo želimo pokazati, kako lahko
          posamezniki prepoznajo <strong>znake spletne prevare</strong> in se pred njo
          ustrezno zaščitijo – še preden vpišejo svoje podatke ali kliknejo na
          nevarno povezavo.
        </p>
      </section>

      <section class="about-section">
        <h2>Ekipa</h2>
        <p class="about-team-intro">
          Smo <strong>študenti 2. letnika magistrskega programa Grafične in interaktivne komunikacije</strong>
  pri predmetu <strong>Interaktivni sistemi 2</strong> z mentorjem
  <strong>izr. prof. dr. Jožetom Guno</strong> in somentorjem
  <strong>as. dr. Matevžem Hribernikom</strong>. Projekt smo zasnovali, ker verjamemo,
  da je <strong>razumevanje spletnih prevar</strong> in osnov kibernetske varnosti
  ključni del <strong>digitalne pismenosti</strong>. Prispevati želimo k varnejši in bolj
  ozaveščeni uporabi interneta na fakulteti in širše.
        </p>

        <div class="about-team-grid">
            <article class="team-card">
            <img src="MEDIA/team-nina.png" alt="Nina Gulič" class="team-avatar">
            <h3>Nina Gulič</h3>
            <p class="team-role">Grafično oblikovanje & priprava vsebine</p>
            <p class="team-note">
                 Moja babica je nedavno prejela sumljiv e-mail, v katerem so jo skušali prevarati s phishing prevaro. Sporočilo je trdilo, da je domnevno dolžna policiji denar, ker naj bi na njenem računu našli ilegalne dejavnosti. Vsebina je bila napisana zelo grozeče in namenjena zastraševanju, da bi jo prisilili k takojšnjemu plačilu. Da bi sporočilu dali videz verodostojnosti, so goljufi dodali tudi ponarejen podpis domnevnega policijskega generala. Na srečo je babica pred kakeršnim plačilom kontaktirala mene in sestro, s katero smo hitro ugotovile, da je šlo za prevaro.
            </p>
          </article>

          
          <article class="team-card">
            <img src="MEDIA/team-lusa.png" alt="Luša Karner" class="team-avatar">
            <h3>Luša Karner</h3>
            <p class="team-role">Grafično oblikovanje & priprava vsebine</p>
            <p class="team-note">
             Moja izkušnja s phishingom se je zgodila, ko sem prejela SMS, od pošte, da moram plačati majhen znesek za dostavo paketa. Ker nisem bila pozorna in sem paket res pričakovala, sem plačilo opravila brez razmisleka. Kasneje sem opazila nenavadno bremenitev in ugotovila, da sem nasedla prevari.
            Ta dogodek me je naučil, kako hitro lahko nasedemo sporočilom, ki so videti verodostojno, zato se mi zdi ozaveščanje o phishingu izjemno pomembno tako v akademskem kot v vsakdanjem življenju, saj nas lahko en nepremišljen klik veliko stane.
            </p>
          </article>

          <article class="team-card">
            <img src="MEDIA/team-zan.png" alt="Žan Kranjčević" class="team-avatar">
            <h3>Žan Kranjčević</h3>
            <p class="team-role">Tehnični razvoj & digitalna izvedba</p>
            <p class="team-note">
            Med ustvarjanjem tega projekta sem prejel SMS, da je bila moja kartica bremenjena na POS terminalu v ZDA. Kartico sem takoj preklical. Na banki so mi povedali, da so jo verjetno klonirali in testirali, ali je aktivna. V času pisanja tega še vedno nisem prejel nove kartice. Iz te izkušnje sem se naučil, kako pomembno je prepoznati sumljive transakcije in hitro ukrepati, saj si lahko prihranimo veliko težav.
            </p>
          </article>

          <article class="team-card">
            <img src="MEDIA/team-katja.png" alt="Katja Tratnjek" class="team-avatar">
            <h3>Katja Tratnjek</h3>
            <p class="team-role">Vsebinska analiza & priprava vsebine</p>
            <p class="team-note">
            Pred dvema letoma sem na šolski mail prejela grozilno sporočilo, v katerem so trdili, da naj bi me prek telefona posnemali pri nekih čudnih oziroma nezakonitih dejanjih, nato pa so me izsiljevali za bitcoine. Ker teh stvari seveda nisem storila, na mail nisem odpisala niti kakorkoli reagirala. Sporočilo sem prijavila in ga izbrisala. Čisto isti mail je prejela tudi moja kolegica, kar je samo potrdilo, da je šlo za navadno prevaro in masovno izsiljevanje. V takšnih situacijah sem se naučila, da je vedno treba ostati miren, ničesar ne klikati, ne odgovarjati in sumljiva sporočila prijaviti, saj večinoma gre le za poskuse ustrahovanja.
            </p>
          </article>
        </div>
      </section>

            <section class="about-section">
        <h2>Kontakt</h2>
        <p>
            Za dodatna vprašanja, povratne informacije ali interes za predstavitev
            projekta nas lahko kontaktirate na naslednje e-poštne naslove:
        </p>
        <ul class="about-contact-list">
            <li><a href="mailto:zk49644@student.uni-lj.si">zk49644@student.uni-lj.si</a></li>
            <li><a href="mailto:kt74208@student.uni-lj.si">kt74208@student.uni-lj.si</a></li>
            <li><a href="mailto:ng73568@student.uni-lj.si">ng73568@student.uni-lj.si</a></li>
            <li><a href="mailto:lk54408@student.uni-lj.si">lk54408@student.uni-lj.si</a></li>
        </ul>
</section>
    </main>

    <footer class="about-footer">
      <p>© 2025 Naravoslovnotehniška fakulteta UL — projekt »Preveri, preden klikneš!«</p>
    </footer>
  </div>

</body>
</html>
