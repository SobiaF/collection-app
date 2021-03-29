<?php

$db = new PDO('mysql:host=db; dbname=collection_app', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `Kdrama`, `ReleaseYear`, `Synopsis`, `Starring` FROM `Kdramas`;");
$query->execute();
$Kdramas = $query->fetchAll();

?>

<html lang="en">
<head>
    <title>Kdrama Collection App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">

    <?php
echo '<ul>';
foreach ($Kdramas as $Kdrama) {
    echo '<li>' . $Kdrama['Kdrama'] . ' - ' . $Kdrama['ReleaseYear'] . ' - ' . $Kdrama['Synopsis'] . ' - ' . $Kdrama['Starring'] . '</li>';
}
echo '</ul>';
?>

</html>