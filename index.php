<?php
$servername = "localhost";
$username = "root";
$password = "!cc8Z1w8iLAs66ipH";
$dbname = "profileapp";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
} catch(PDOException $e) {
    echo "error" . $e->getMessage();
}

require './controller/main.controller.php';
$index = new mainController($conn);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $index->makeuser();
} else {
    $index->index();
}
