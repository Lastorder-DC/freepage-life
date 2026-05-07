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
        <h2>Sign Up For Free Hosting</h2>
        <p>You can sign up here for fast free PHP &amp; MySQL hosting including a free sub domain.
        Fill out the form below and your free hosting account will be created. <em>Enjoy :)</em></p>
      </div>

      <div class="card shadow-sm">
        <div class="card-body">
          <form method="post" action="http://order.<?php echo htmlspecialchars($yourdomain); ?>/register.php">
            <div class="mb-3">
              <label for="username" class="form-label">Username</label>
              <input type="text" class="form-control" id="username" name="username" value="<?php if (isset($_GET['username'])) { echo htmlspecialchars($_GET['username']); } ?>">
            </div>
            <div class="mb-3">
              <label for="password" class="form-label">Password</label>
              <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3">
              <label for="email" class="form-label">Email Address</label>
              <input type="email" class="form-control" id="email" name="email" value="<?php if (isset($_GET['email'])) { echo htmlspecialchars($_GET['email']); } ?>">
            </div>
            <div class="mb-3">
              <label for="website_category" class="form-label">Site Category</label>
              <select class="form-select" id="website_category" name="website_category">
                <option>Choose from Below</option>
                <option>Personal</option>
                <option>Business</option>
                <option>Hobby</option>
                <option>Forum</option>
                <option>Adult</option>
                <option>Dating</option>
                <option>Software / Download</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="website_language" class="form-label">Site Language</label>
              <select class="form-select" id="website_language" name="website_language">
                <option>Choose from Below</option>
                <option>English</option>
                <option>Non-English</option>
              </select>
            </div>
            <?php
              $id = md5(rand(6000, PHP_INT_MAX));
            ?>
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <div class="mb-3">
              <label class="form-label">Security Code</label>
              <img class="d-block mb-2 img-fluid rounded" src="http://order.<?php echo htmlspecialchars($yourdomain); ?>/image.php?id=<?php echo $id; ?>" alt="Security code" style="max-width:250px;">
              <input type="text" class="form-control" name="number" placeholder="Enter security code">
            </div>
            <p class="text-muted small">By signing up for our free hosting, you accept and agree to our <a href="https://ifastnet.com/portal/terms.php">Terms of Service</a>.</p>
            <button type="submit" name="submit" class="btn btn-primary">Register</button>
          </form>
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
