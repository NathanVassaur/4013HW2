<?php
$pageTitle = "Get result";
include "view-header.php";
?>

<h1>Get result</h1>

<?php
if (isset($_GET['my-name'])) {
  ?>
  <p?The value sent is:
  <?php
  echo$_GET['my-name'];
  
} else{
  ?>
  <p>Nothing posted to the page.</p>

  <?php
}
include "view-footer.php";
?>
