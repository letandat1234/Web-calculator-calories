<?php
include 'partials1/header.php';
require __DIR__ . '/fitness/fitness.php';


if (!isset($_POST['id'])) {
    include "partials1/not_found.php";
    exit;
}
$userId = $_POST['id'];
deleteUser($userId);

header("Location: tablefitness.php");
