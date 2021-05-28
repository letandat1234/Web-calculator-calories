<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';


$user = [
      'id' => '',
    'type' => '',
    'name' => '',
    'calo' => '',
    'water' => '',
     'protein' => '',
    'fat' => '',
    'carb' => '',
    'df' => '',

];

$errors = [
        'type' => '',
    'name' => '',
    'calo' => '',
    'water' => '',
    'protein' => '',
    'fat' => '',
    'carb' => '',
    'df' => '',

];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);


    if ($isValid) {
        $user = createUser($_POST);

        uploadImage($_FILES['picture'], $user);

        header("Location: tablefood.php");
    }
}

?>

<?php include '_form.php' ?>

