<?php 
require "database.php"; 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Freedom Public Wall</title>
    <link rel="stylesheet" href="global.css">
</head>
<body>
    <?php include "components/nav.html"; ?>
    <?php include "components/hero.php"; ?>
    <?php echo $message_conn;  ?>
</body>
</html>