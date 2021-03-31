<?php
require_once "functions.php";
$db = getDb();

if (
    isset($_POST['id'])
) {

    $id = $_POST['id'];

    $query = $db->prepare('DELETE FROM `Kdramas` WHERE `id`=:id');

    $query->bindParam('id', $id);
    $query->execute();
    header('Location: index.php');
    exit;
}