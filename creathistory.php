<?php
include 'partials/header.php';
require __DIR__ . '/history/history.php';


$user = [
    'id' => '',
    
    'calo1' => '',
'calo2' => '',
'calo3' => '',
'calo4' => '',
'date' => '',
];

$errors = [
  
     'calo1' => '',
  
     'calo2' => '',
'calo3' => '',
'calo4' => '',
   'date' => '',
];
$isValid = true;

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $user = array_merge($user, $_POST);

    $isValid = validateUser($user, $errors);

    if ($isValid) {
        $user = createUser($_POST);

        uploadImage($_FILES['picture'], $user);

        
        header("Location: tablehistory.php");
    }
}

?>

<?php include '_formhistory.php' ?>

