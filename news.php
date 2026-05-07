<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php echo htmlspecialchars($yourdomain); ?> web hosting</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="default.css" rel="stylesheet">
</head>
<body>
<?php
  $yourdomain = $_SERVER['HTTP_HOST'];
  $yourdomain = preg_replace('/^www\./', '', $yourdomain);
?>

<?php include("menu.php"); ?>

<div class="container py-4">
  <div class="row g-4">
    <!-- Main content -->
    <div class="col-lg-8">
      <div class="mb-4 pb-3 section-divider">
        <h2>Free hosting news</h2>
        <p>We proudly announce the following new features on all free hosting accounts!</p>
        <ol>
          <li class="mb-3"><strong>cPanel PaperLantern theme</strong> — The modern and professional PaperLantern theme is now available for all free hosting accounts via cPanel.</li>
          <li class="mb-3"><strong>Softaculous 1-click script installer</strong> — Softaculous is an auto installer for cPanel. Unlike other auto installers, Softaculous is much faster, well designed and it installs all scripts in just ONE STEP.</li>
        </ol>
      </div>

      <div class="row g-4">
        <div class="col-md-5">
          <img src="images/cluster.jpg" class="img-fluid rounded img-panel" alt="rack">
        </div>
        <div class="col-md-7">
          <div class="card content-card h-100 shadow-sm">
            <div class="card-body">
              <h5 class="card-title">Value for free</h5>
              <p class="card-text">Our cluster-based GRID network features hundreds of server nodes using the right software for the right job powered by Linux and Unix operating systems.</p>
              <p class="card-text"><?php echo htmlspecialchars($yourdomain); ?> hosting has the right services for you and at the right price... <strong>$0.00!</strong></p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Instant activation</h5>
          <blockquote class="sidebar-quote">
            <p class="mb-0">Free hosting accounts are activated instantly, no need to wait for manual approval, you can start building your pages immediately! A powerful cPanel control panel is provided to manage your website, packed with hundreds of great features including FTP, add-on domains and much more.</p>
          </blockquote>
        </div>
      </div>
    </div>
  </div>
</div>

<?php include("footer.php"); ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
