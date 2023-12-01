<?php
$pageTitle = "Post Result";
include "view-header.php";
?>

<h1>Post Result</h1>

<?php
if (isset($_POST['my-name'])) {
    echo "<p>The value sent is: " . $_POST['my-name'] . "</p>";
} else {
    echo "<p>Nothing posted to the page.</p>";
}
include "view-footer.php";
?>

