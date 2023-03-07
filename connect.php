<?php
$dbName = "book_crud_project";
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "admin";
$conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
if (!$conn) {
    die("Something went wrong");
}
?>