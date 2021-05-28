<?php
include 'partials/header.php';
require __DIR__ . '/recipes/recipe.php';


$user = [
    'id' => '',
    'name' => '',
    'des' => '',
'ingre' => '',
'direct' => '',
];

$errors = [
    'name' => "",
     'des' => '',
'ingre' => '',
'direct' => '',
 
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);

        uploadImage($_FILES['picture'], $user);

        header("Location: tablerecipe.php");
    }
}

?>

<?php include '_formrecipe.php' ?>

