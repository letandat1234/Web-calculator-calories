<?php
include 'partials/header.php';
require __DIR__ . '/history/history.php';


if (!isset($_POST['id'])) {
    include "partials1/not_found.php";
    exit;
}
$userId = $_POST['id'];
deleteUser($userId);

header("Location: tablehistory.php");
