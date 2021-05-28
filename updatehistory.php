<?php
include 'partials/header.php';
require __DIR__ . '/history/history.php';

if (!isset($_GET['id'])) {
    include "partials1/not_found.php";
    exit;
}
$userId = $_GET['id'];

$user = getUserById($userId);
if (!$user) {
    include "partials1/not_found.php";
    exit;
}

$errors = [
  
 

       'calo1' => "",
  
     'calo2' => "",
'calo3' => "",
'calo4' => "",
   'date' => "",
];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = updateUser($_POST, $userId);
        uploadImage($_FILES['picture'], $user);
        header("Location: tablehistory.php");
    }
}

?>

<?php include '_formhistory.php' ?>
