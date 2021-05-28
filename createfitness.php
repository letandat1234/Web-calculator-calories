<?php
include 'partials/header.php';
require __DIR__ . '/fitness/fitness.php';


$user = [
    'id' => '',
    'name' => '',
    'calo' => '',
'time' => '',
'type' => '',

];

$errors = [
    'name' => "",
     'calo' => '',
'time' => '',
'type' => '',
 
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);

        uploadImage($_FILES['picture'], $user);

        header("Location: tablefitness.php");
    }
}

?>

<?php include '_formfitness.php' ?>

