<?php
require("./config.php");

session_start();
if(!isset($_SESSION["login"]) || $_SESSION["login"] != "on"){
	header("Location: ./index.php");
}

if( !isset($_POST["sale"])){
    $_POST["sale"] = NULL;
}
if( !isset($_POST["new"])){
    $_POST["new"] = NULL;
}
if( !isset($_POST["img"])){
    $_POST["img"] = NULL;
}
 
if( isset($_FILES["img"]) && $_FILES["img"]["tmp_name"] != ""){
    move_uploaded_file($_FILES["img"]["tmp_name"], "./img/products/" . $_FILES["img"]["name"]);
    $fileName = $_FILES["img"]["name"];
}else {
    $fileName = "nophoto.jpg";
}

$sql = "INSERT INTO products(title, price, description, img, category, sale, new) 
                VALUES(:title, :price, :description, :img, :category, :sale, :new)";

$stmt = $db->prepare($sql);

$stmt->bindValue(":title", $_POST["title"]);
$stmt->bindValue(":price", $_POST["price"]);
$stmt->bindValue(":description", $_POST["description"]);
$stmt->bindValue(":img", $fileName);
$stmt->bindValue(":category", $_POST["category"]);
$stmt->bindValue(":sale", $_POST["sale"]);
$stmt->bindValue(":new", $_POST["new"]);

$stmt->execute();

header("Location: ./admin-success.php");
