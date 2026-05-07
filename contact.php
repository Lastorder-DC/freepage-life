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
        <h2>Contact Us</h2>
        <p>If you have any problems or have the need to contact us to ask a question,
        you can use the <strong>integrated support system</strong> in your control panel to create a support ticket.<br><br>
        We will reply to your question as soon as possible.<br><br>
        For technical support please look at the <a href="http://byet.net/forumdisplay.php?f=28">Knowledge Base</a>.</p>
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
