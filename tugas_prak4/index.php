<?php
include_once 'header.php';
include_once 'menu.php';
?>

<div class="content-wrapper">
  <div class="container-fluid">
    <?php
    error_reporting(0);
    $hal = $_GET['hal'];
    if ($hal == 'dashboard') {
      include_once 'dashboard.php';
    } else if (!empty($hal)) {
      include_once '' . $hal . '.php';
    } else {
      include_once 'dashboard.php';
    }
    ?>
  </div>
</div>
</div>

<?php
include_once 'footer.php';
?>