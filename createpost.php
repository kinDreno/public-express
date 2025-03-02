<?php include "database.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link rel="stylesheet" href="global.css">
        <link rel="stylesheet" href="styles/post.css">
</head>
<body>
    <?php include "components/nav.html"; ?>
    <form action="php_scripts/post.php" method="POST">
        <section>
            <label for="title">Title:</label>
            <input type="text" name="title">
        </section>
        <section>
            <label for="author">Author:</label>
            <input type="text" name="author">
        </section>
        <section>
            <label for="content">Content:</label>
            <input type="text" name="content">  
        </section> 
        <input type="submit" value="Post Now">   
    </form>
</body>
</html>