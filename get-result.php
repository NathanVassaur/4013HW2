<?php
$pageTitle = "Get Result";
include "view-header.php";
?>

<h1>Get Result</h1>

<?php
if (isset($_GET['my-name'])) {
    echo "<p>The value sent is: " . $_GET['my-name'] . "</p>";
} else {
    echo "<p>Nothing posted to the page.</p>";
}
include "view-footer.php";
?>

