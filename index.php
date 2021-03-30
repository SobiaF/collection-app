<?php

$db = new PDO('mysql:host=db; dbname=collection_app', 'root', 'password');
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
$query = $db->prepare("SELECT `Kdrama`, `ReleaseYear`, `Synopsis`, `Starring` FROM `Kdramas`;");
$query->execute();
$Kdramas = $query->fetchAll();

?>

<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="normalize.css">
    <link rel="stylesheet" href="style.css">
<body>
<h1>Kdrama Collection App</h1>

    <?php
echo '<ul>';
foreach ($Kdramas as $Kdrama) {
    echo '<li>' . $Kdrama['Kdrama'] . ' - ' . $Kdrama['ReleaseYear'] . ' - ' . $Kdrama['Synopsis'] . ' - ' . $Kdrama['Starring'] . '</li>';
}
echo '</ul>';
?>

<form action="add_kdrama.php" method="post">
    <p>Kdrama: <input type="text" name="Kdrama" required></p>
    <p>Release Year: <input type="number" name="ReleaseYear" required></p>
    <p>Starring: <input type="text" name="Starring" required></p>
    <p>Synopsis: <input type="text" name="Synopsis" required></p>
    <input type="submit" value="submit">
</form>

</body>
</html>