<?php
require_once "functions.php";

if (
    isset($_POST['Kdrama']) &&
    isset($_POST['ReleaseYear']) &&
    isset($_POST['Synopsis']) &&
    isset($_POST['Starring'])
) {
    $db = getDb();

    $Kdrama = $_POST['Kdrama'];
    $Releaseyear = $_POST['ReleaseYear'];
    $Synopsis = $_POST['Synopsis'];
    $Starring = $_POST['Starring'];

    $query = $db->prepare('INSERT INTO `Kdramas` (`Kdrama`, `ReleaseYear`, `Synopsis`, `Starring`) VALUES (:Kdrama, :ReleaseYear, :Synopsis, :Starring);');

    $query->bindParam('Kdrama', $Kdrama);
    $query->bindParam('ReleaseYear', $Releaseyear);
    $query->bindParam('Synopsis', $Synopsis);
    $query->bindParam('Starring', $Starring);
    $query->execute();
    header('Location: index.php');
    exit;
}