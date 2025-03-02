

<?php include("database.php"); 

// INSERT VALUES IN SQL
// $sql = "INSERT INTO users (user, password)
//         VALUES ('spongebob', 'pineapple1')";

// mysqli_query($conn, $sql);

// mysqli_close($conn);

// QUERY DATAS IN SQL

// used to retrieve all of the users
                                // to retrieve a specific row   
$sql = "SELECT * FROM users"; // WHERE user = "name"
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
    echo $row["id"] . " <br />";
    echo $row["user"] . " <br />";
    echo $row["reg_date"] . " <br />";
    }
} else {
    echo "No users found";
}

mysqli_close($conn);
?>
