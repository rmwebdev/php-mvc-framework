<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $this->siteTitle(); ?></title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?=PROOT?>fonts/fontawesome-free-5.15.2-web/css/all.min.css"/>
    <link href="<?=PROOT?>css/bootstrap.min.css" rel="stylesheet">
    <link href="<?=PROOT?>css/custom.css" rel="stylesheet">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <?= $this->content('head'); ?>

  </head>
  <body>
    <?= $this->content('body'); ?>

    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"></script> -->
    <script src="<?=PROOT?>js/bootstrap.min.js"></script>
    <script src="<?=PROOT?>js/jquery-3.6.0.js"></script>
   
  </body>
</html>