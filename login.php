<?php
require __DIR__ . '/phish_session.php';
$pageSlug = 'login';
require __DIR__ . '/phish_track_event.php';

$group = isset($_GET['group']) && $_GET['group'] !== ''
    ? $_GET['group']
    : 'unknown';
?>

<!doctype html>
<html lang="sl">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Vpis | NTF</title>

  <link rel="stylesheet" href="/style.css?v=1">
  <link rel="apple-touch-icon" sizes="180x180" href="MEDIA/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="MEDIA/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="MEDIA/favicon-16x16.png">
  <link rel="manifest" href="MEDIA/site.webmanifest">
</head>
<body>

  <div class="login-wrap">
    <header class="login-header">
      <img class="unlogo" src="MEDIA/unilj_logo.svg" alt="Univerza v Ljubljani">
    </header>

    <main class="login-main">
      <form class="login-card" action="track_db.php" method="post" novalidate>

        <label class="login-field">
          <span class="login-label">Sign in</span>
          <span class="login-error" id="email-error"></span>
          <input
            id="login-email"
            type="email"
            class="login-input"
            autofocus
            placeholder="Enter your email, phone, or Steam.">
        </label>

        <label class="login-field">
          <span class="login-label">Enter password</span>
          <span class="login-error" id="password-error"></span>
          <input
            id="login-password"
            type="password"
            class="login-input"
            placeholder="Password">
        </label>

        <a href="#" class="login-help-link">
          Forgot my password
        </a>

        <a href="#" class="login-help-link">
          Use your face, fingerprint, PIN, or security key instead
        </a>

        <input type="hidden" name="scenario" value="ntf-phishing-2025">
        
        
        <input type="hidden" name="user_group"
       value="<?php echo htmlspecialchars($group, ENT_QUOTES, 'UTF-8'); ?>">

        <div class="login-actions">
          <button type="submit" class="login-btn login-btn--primary">
            Sign in
          </button>
        </div>
      </form>

      <footer class="choice-footer">
        <div class="login-footer-links">
          <a href="#">Terms of use</a>
          <a href="#">Phishing &amp; cookies</a>
        </div>
        <div class="login-footer-more">…</div>
      </footer>
    </main>
  </div>

 <script>
   document.addEventListener('DOMContentLoaded', function () {
    const form      = document.querySelector('.login-card');
    const email     = document.getElementById('login-email');
    const password  = document.getElementById('login-password');
    const emailErr  = document.getElementById('email-error');
    const passErr   = document.getElementById('password-error');

    function clearError(input, errEl) {
      if (!input || !errEl) return;
      input.classList.remove('login-input--error');
      errEl.textContent = '';
      errEl.classList.remove('login-error--visible');
    }

    if (email) {
      email.addEventListener('input',  () => clearError(email, emailErr));
    }
    if (password) {
      password.addEventListener('input', () => clearError(password, passErr));
    }

    form.addEventListener('submit', function (e) {
      clearError(email, emailErr);
      clearError(password, passErr);

      const emailVal = email.value.trim();
      const passVal  = password.value.trim();

      const allowedDomainPattern = /^[^\s@]+@(student\.uni-lj\.si|ntf\.uni-lj\.si)$/i;

      // email
      if (!emailVal || !allowedDomainPattern.test(emailVal)) {
        e.preventDefault();
        email.classList.add('login-input--error');
        emailErr.textContent = 'Enter a valid email address.';
        emailErr.classList.add('login-error--visible');
        email.focus();
        return;
      }

      // password
      if (!passVal) {
        e.preventDefault();
        password.classList.add('login-input--error');
        passErr.textContent = 'Please enter your password.';
        passErr.classList.add('login-error--visible');
        password.focus();
        return;
      }

    });
  });
</script>

</body>
</html>