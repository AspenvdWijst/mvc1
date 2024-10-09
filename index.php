<?php
include 'controller/database.php';

require './controller/main.controller.php';
$index = new mainController($conn);
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $index->makeuser();
} else {
    $index->index();
}
