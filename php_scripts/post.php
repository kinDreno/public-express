<?php 
include "database.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $content = filter_input(INPUT_POST, "content", FILTER_SANITIZE_SPECIAL_CHARS);
    $author =  filter_input(INPUT_POST, "author", FILTER_SANITIZE_SPECIAL_CHARS);
    $title = filter_input(INPUT_POST, "title", FILTER_SANITIZE_SPECIAL_CHARS);
    $message = "";
    if (empty($content) || empty($author) || empty($title)) {
        $message = "All fields are required!";
    } 
    
    else {
        $sql = "INSERT INTO posts (content, author, title)
                VALUES (?, ?, ?)";
        $stmt = mysqli_prepare($conn, $sql);

        mysqli_stmt_bind_param($stmt, "sss", $content, $author, $title);
        
        try {
            mysqli_stmt_execute($stmt);
            mysqli_stmt_close($stmt);
            mysqli_close($conn);
            header("Location: second.php?success=1");

            exit;
        } catch (mysqli_sql_exception $e) {
            echo "An error occured: " . $e->getMessage();
        }

        
    }
}

mysqli_close($conn);

?>