<!doctype html>
<html lang="fr">
<?php require_once('includes/head.php'); ?>
<body>
  <div id="colorwrapper">
    <?php require_once('includes/header.php'); ?>
    <?php
    if (isset($_POST['imaginaire']) == 0 && isset($_POST['reel']) == 0)
      require_once('includes/apps.php');
    else
      require_once('includes/results.php');
    ?>
    <?php require_once('includes/footer.php'); ?>
  </div>
</body>
</html>