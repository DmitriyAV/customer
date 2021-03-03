<?php

$username = 'root';
$password = 'root';
$dsn = 'mysql:host=localhost;dbname=clientform';
$pdo = new PDO($dsn, $username, $password);

$errorEmpty = false;

if (count($_POST) > 0) {
if (empty($name)) {
    echo("<span class='form-error'> Fill that field!</span>");
    $errorEmpty = true;

}
if (empty($phone)) {
    echo("<span class='form-error'> Fill that field!</span>");
    $errorEmpty = true;

}
if (empty($category)) {
    echo("<span class='form-error'> Fill that field!</span>");
    $errorEmpty = true;

}else {


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
}
} else {
    echo "There is an error!";
}

?>

<script>

let errorEmpty = <?=$errorEmpty?>;
    $("#name, #phone, #category").removeClass("input-error");

    if (errorEmpty == true) {
        $("#name, #phone, #category").addClass("input-error");
    }
    if (errorEmpty == false) {
        $("#name, #phone, #category").val("");
    }
</script>
