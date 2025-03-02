<?php 
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "freedomwalldb";

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = mysqli_connect($host, $user, $pass, $dbname);
    $message_conn = "Connected successfully,";
} catch (mysqli_sql_exception $e) {
    die("Cannot connect: " . $e->getMessage());
}
?>
