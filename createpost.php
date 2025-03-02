<?php include "database.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Submission</title>
    <link rel="stylesheet" href="global.css">
    <link rel="stylesheet" href="styles/post.css">
</head>
<body>
    <?php include "components/nav.html"; ?>

    <?php if (isset($_GET["success"])): ?> 
        <p style="color: green;">✅ Post submitted successfully!</p> 
    <?php endif; ?>

    <form action="php_scripts/post.php" method="POST">
        <section>
            <label for="title">Title:</label>
            <input type="text" name="title" maxlength="255" required>
        </section>
        <section>
            <label for="author">Author:</label>
            <input type="text" name="author" maxlength="100" required>
        </section>
        <section>
            <label for="content">Content:</label>
            <!-- kernelk14: I added a textarea instead of textinput -->
            <!-- input type="text" name="content" required -->  
            <textarea name="content" required></textarea>
        </section> 
        <input type="submit" value="Post Now">   
    </form>
</body>
</html>
