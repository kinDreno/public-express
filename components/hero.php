<?php 
require "database.php";

$result = mysqli_query($conn, "SELECT * FROM posts ORDER BY posted_at DESC");
?>
<link rel="stylesheet" href="styles/main.css">

<main>
    <div style="text-align: center; padding: 0 50px ;">
    <h2><b>Hi! Welcome to Freedom Express Wall!</b></h2>
    <p>A website where you can post whatever you like through text! No need to login and your personal information is not needed
        to post anything. Feel free to share your thoughts!</p>
    </div>
    <?php if (mysqli_num_rows($result) > 0): ?>
        <?php while($row = mysqli_fetch_assoc($result)): ?>
            <article class="post">
                <div>
                    <p><?= htmlspecialchars($row["author"]) ?> |</p>
                    <p>Posted at: <?= date("F j, Y", strtotime($row["posted_at"])) ?></p>
                </div>
                <h2><?= htmlspecialchars($row['title']) ?></h2>
                <p><?= nl2br(htmlspecialchars($row['content'])) ?></p>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</main>