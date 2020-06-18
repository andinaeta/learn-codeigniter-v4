<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/assets/vendor/bootstrap-4.5.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="/assets/css/style.css" />
  <title><?= $title; ?></title>
</head>

<body>

  <!-- Parsial -->
  <?= $this->include('layout/navbar'); ?>

  <?= $this->renderSection('content'); ?>

  <script src="/assets/vendor/jquery/jquery-3.5.1.min.js"></script>
  <script src="/assets/vendor/popper/popper.min.js"></script>
  <script src="/assets/vendor/bootstrap-4.5.0/js/bootstrap.min.js"></script>
</body>

</html>