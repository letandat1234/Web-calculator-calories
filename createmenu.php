<?php
include 'partials/header.php';
require __DIR__ . '/menu/menu.php';


$user = [
    'id' => '',
    'name' => '',
    'time' => '',
'info' => '',
'type' => '',
];

$errors = [
    'name' => "",
     'time' => '',
'info' => '',
'type' => '',
 
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);

        uploadImage($_FILES['picture'], $user);

        header("Location: tablemenu.php");
    }
}

?>

<?php include '_formmenu.php' ?>

