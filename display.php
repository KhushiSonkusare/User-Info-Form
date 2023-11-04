<?php
require 'create.php';
require 'Form.php';

if (isset($_POST['name'])) {
//validations for empty fields.

if (empty($_POST['name'])) {
    $errors[] = "Name is required.";
}
if (empty($_POST['email'])) {
    $errors[] = "Email is required.";
}
if (empty($_POST['gender'])) {
    $errors[] = "Gender is required.";
}
if (empty($_POST['city'])) {
    $errors[] = "City is required.";
}

//validations for email.

$email = $_POST['email']; 

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
   
} else {
    $errors[] = "Invalid email address. Email must be of type: abc@gmail.com.";
}

//validations for email already in use.

$pdo = connectToDb();


    $statement = $pdo->prepare('SELECT * from datastored'); 
    $statement->execute();
    $datas = $statement->fetchAll(PDO::FETCH_CLASS, 'Form');

foreach ($datas as $data):
    if($data->email == $email){
        $errors[] = "Email already in use.";
        break;
    }
endforeach;


if (empty($errors)) {
    echo "<div style='font-size:50px; text-align: center;'>Successfully inserted entry</div>";
    echo "<br><a href='index.view.php'>Go back</a>";
    
} else {
    echo "<center>";
    echo "<div style='border: 2px solid #ff0000;padding: 10px;margin-bottom: 10px;width:250px;>";
    
    echo "<h3 style='color: #ff0000'>ERROR</h3>";
    echo "<br>";
    foreach ($errors as $error) {
        echo $error . "<br>";
        

    }
    echo "</div>";
    echo "</center>";
    echo "<br><a href='index.view.php'>Go back</a>";
    exit;
}

?>


<?php

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];
    $city = $_POST['city'];


    $sql = "INSERT INTO dataStored
                SET
            name = '$name',
            email = '$email',
            gender = '$gender',
            city = '$city'";
    
    $statement = $pdo->prepare($sql); 
    $statement->execute();
}

require 'index.view.php';
    
?>