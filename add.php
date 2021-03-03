<?php

$username = 'root';
$password = 'root';
$dsn = 'mysql:host=localhost;dbname=clientform';
$pdo = new PDO($dsn, $username, $password);

$errorEmpty = false;

if (count($_POST) > 0) {

    $name = trim($_POST['name']);
    $name = htmlspecialchars($name);
    $phone = trim($_POST['phone']);
    $phone = htmlspecialchars($phone);
    $category = trim($_POST['category']);
    $category = htmlspecialchars($category);
    $query = $pdo->prepare("INSERT INTO website (BusinassName, Phonenumber, BusinessCategory) VALUE(:name, :phone, :category);");
    $values = ['name' => $name, 'phone' => $phone, 'category' => $category];
    $query->execute($values);
    echo("<span class='form-success'> Form is complete!</span>");

} else {
    echo "There is an error!";
}



