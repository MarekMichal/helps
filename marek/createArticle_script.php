<?php
require_once('conn.php');
$isEmpty = false;

$title = mysqli_real_escape_string($conn, $_POST['Title']);
$text = mysqli_real_escape_string($conn, $_POST['Text']);
$author = mysqli_real_escape_string($conn, $_POST['Autor']);
$img = mysqli_real_escape_string($conn, $_POST['Cover_image']);

if(empty($_POST["Title"])){
    $isEmpty = true;
}

if(empty($_POST["Autor"])){
    $isEmpty = true;
}

if(empty($_POST["Text"])){
    $isEmpty = true;
}

if(empty($_POST["Cover_image"])){
    $isEmpty = true;
}
if($isEmpty == true){
    header('Location: createArticle.php?message= ERROR!');
}

if($isEmpty == false){
    $sql = "INSERT INTO articles (Title, Autor, Text, Cover_image) 
    VALUES('$title', '$author', '$text', '$img')";
    if ($conn->query($sql) == true){       
        header('Location: createArticle.php?message=Clanok vytvoreny.');
    }
    else{
        echo "Error" . $sql . "<br>" . $conn->error;
    }
    $conn->close();
}
?>