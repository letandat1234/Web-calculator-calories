<?php
include 'partials/header.php';
require __DIR__ . '/users1/users.php';


$user = [
    'id' => '',
    'name' => '',
    'username' => '',

 
    'age' => '',
    'height' => '',
    'weight' => '',
    'gender' => '',
    'tdee'=> '',

];

$errors = [
    'name' => "",
    'username' => "",
 
  
     'age' => "",
    'height' => "",
    'weight' => "",
    'gender' => "",
     'tdee'=> "",
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);

        uploadImage($_FILES['picture'], $user);

        header("Location: tableuser.php");
    }
}

?>

<?php include '_formuser.php' ?>

