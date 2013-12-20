<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
</head>

<div>
<?php
$mysqli = new mysqli("localhost", "root", "wishpass", "wishlist");

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>

</div>
 
</html>

