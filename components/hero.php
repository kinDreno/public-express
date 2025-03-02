<link rel="stylesheet" href="styles/main.css">


<main>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
        <label for="searchbar">Search</label>
        <input type="text" name="searchbar" placeholder="Search a title">
        <input type="submit" name="submit" value="Enter">
    </form>
    <article class="post">
        <div>
            <p>Kin |</p>
            <p>Posted at: 2025, February 29</p>
        </div>
        <h2>Title</h2>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
        Similique, perspiciatis quidem. Sed. Lorem ipsum dolor sit amet consectetur
        adipisicing elit. Incidunt, repellat impedit. Facilis ea blanditiis laboriosam, quasi eum, omnis provident officiis quidem saepe eveniet quos amet aliquid repellendus nihil eaque quis magni, reiciendis itaque alias ipsa nisi magnam veniam? Animi, quam?</p>
    </article>
    <article class="post">
        <div>
            <p>Author |</p>
            <p>Posted at: 2025, February 29</p>
        </div>
        <h2>Title</h2>
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugit, autem! Soluta nostrum quaerat fugit?</p>
    </article>
</main>