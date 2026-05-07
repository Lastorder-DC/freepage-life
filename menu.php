<?php
// $yourdomain is set in the parent page before this include
?>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
  <div class="container">
    <a class="navbar-brand" href="/index.php">
      <?php echo htmlspecialchars($yourdomain); ?>
      <span class="tagline">Free and premium hosting</span>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="mainNavbar">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
        <li class="nav-item"><a class="nav-link" href="/index.php">Homepage</a></li>
        <li class="nav-item"><a class="nav-link" href="/signup.php">Signup</a></li>
        <li class="nav-item"><a class="nav-link" href="/news.php">News</a></li>
        <li class="nav-item"><a class="nav-link premium-link" href="https://ifastnet.com/portal/">⭐ Premium Hosting</a></li>
        <li class="nav-item"><a class="nav-link" href="/contact.php">Contact Us</a></li>
        <li class="nav-item"><a class="nav-link" href="https://ifastnet.com/portal/terms.php">Terms of Service</a></li>
      </ul>
    </div>
  </div>
</nav>
<div class="site-header-banner">
  <div class="container text-end py-3">
    <h1 class="display-5 fw-bold text-white mb-0">
      <a href="/index.php" class="text-decoration-none text-white"><?php echo htmlspecialchars($yourdomain); ?></a>
    </h1>
    <p class="text-white-50 fst-italic mb-0">Free and premium hosting</p>
  </div>
</div>
