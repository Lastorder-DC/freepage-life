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
        <h2>Welcome to <?php echo htmlspecialchars($yourdomain); ?></h2>
        <p class="lead"><strong><?php echo htmlspecialchars($yourdomain); ?></strong> are specialists in free hosting services</p>
        <div class="alert alert-info d-flex align-items-center gap-2" role="alert">
          <span class="fs-5">🚀</span>
          <span><strong>Free and Fast Hosting by iFastNet</strong></span>
        </div>
        <ul class="list-group list-group-flush feature-list">
          <li class="list-group-item">✔ 1024 MB Disk Space</li>
          <li class="list-group-item">✔ Monthly Traffic 30 GB</li>
          <li class="list-group-item">✔ FTP Account and File Manager</li>
          <li class="list-group-item">✔ cPanel Control Panel</li>
          <li class="list-group-item">✔ MySQL Databases (10) &amp; PHP 8.3 Support</li>
          <li class="list-group-item">✔ Free Tech Support</li>
          <li class="list-group-item">✔ Addon Domains (10), Parked Domains, Sub-Domains</li>
          <li class="list-group-item">✔ Free Community Access (Forums)</li>
          <li class="list-group-item">✔ Clustered Servers</li>
          <li class="list-group-item">✔ Softaculous</li>
          <li class="list-group-item">✔ Cron Jobs</li>
          <li class="list-group-item">✔ SPF Records</li>
        </ul>
      </div>

      <div class="row g-4">
        <div class="col-md-6">
          <div class="card content-card h-100 shadow-sm">
            <img src="images/img6.jpg" class="card-img-top img-panel" alt="server">
            <div class="card-body">
              <h5 class="card-title">Automated features</h5>
              <p class="card-text">We provide free FTP, PHP 8.3, MySQL and our very popular feature: The Automatic Script Installer Softaculous can install many popular scripts such as WordPress, Joomla, MyBB, SMF, Zen-Cart, osCommerce, Coppermine, and many more! No need to wait a long time uploading files — our Automatic Script Installer deploys your files in seconds!</p>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="card content-card h-100 shadow-sm">
            <img src="images/img5.jpg" class="card-img-top img-panel" alt="server">
            <div class="card-body">
              <h5 class="card-title">Quotas and forum</h5>
              <p class="card-text">Combined with our high bandwidth, space provisions and excellent sub-domain options, make us the optimal option. Our very popular Community Forums has been taken up excellently and active members are growing steadily, hence resulting in a better hosting and friendly experience.</p>
              <h6>Cluster servers</h6>
              <p class="card-text">We are using a powerful cluster of webservers that are all interconnected to act as one giant super computer.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Sidebar -->
    <div class="col-lg-4">
      <div class="card shadow-sm">
        <div class="card-body">
          <h5 class="card-title">Faster webpages</h5>
          <blockquote class="sidebar-quote">
            <p class="mb-0">The powerful cluster technology is years ahead of other hosting companies. Combining the power of lots of servers simultaneously creates lightning fast website speeds. Not only is the service extremely fast, it is resistant to common failures that affect 'single server' hosting, used by most other free and paid hosting providers.</p>
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
