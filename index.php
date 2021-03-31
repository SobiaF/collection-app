<?php
require_once 'functions.php';
$db = getDb();
$Kdramas = getKdramas($db);
?>

<html lang='en'>
<head>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' href='normalize.css'>
    <link rel='stylesheet' href='style.css'>
<body>
<h1>Kdrama Collection App</h1>

<form action='add_kdrama.php' method='post'>
    <p>Kdrama: <input type='text' name='Kdrama' required></p>
    <p>Release Year: <input type='number' name='ReleaseYear' required></p>
    <p>Starring: <input type='text' name='Starring' required></p>
    <p>Synopsis: <input type='text' name='Synopsis' required></p>
    <input type='submit' value='submit'>
</form>
<?php

echo showKdramas($Kdramas);
?>

</body>
</html>

