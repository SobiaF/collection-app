<?php

$db = new PDO('mysql:host=db; dbname=collection_app', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `Kdrama`, `ReleaseYear`, `Synopsis`, `Starring` FROM `Kdramas`;");
$query->execute();
$Kdramas = $query->fetchAll();
echo '<ul>';
foreach ($Kdramas as $Kdrama) {
    echo '<li>' . $Kdrama['Kdrama'] . ' - ' . $Kdrama['ReleaseYear'] . ' - ' . $Kdrama['Synopsis'] . ' - ' . $Kdrama['Starring'] . '</li>';
}
echo '</ul>';