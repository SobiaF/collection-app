<?php
/**
 * Returns a new PDO connection
 *
 * @return PDO
 */
function getDb() {
    $db = new PDO('mysql:host=db; dbname=collection_app', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

/**
 *  @params all data from database. Function for data to be shown.
 *  Return should return the data.
 */
function getKdramas(object $db) : array
{
    $query = $db->prepare("SELECT `Kdrama`, `ReleaseYear`, `Synopsis`, `Starring` FROM `Kdramas`;");
    $query->execute();
    return $query->fetchAll();
}

/**
 *  @params contains all Kdrama information to be shown
 *  @return returns the Kdrama, its release data, synopsis and as well as who is starring in the kdrama.
 */

function showKdramas(array $Kdramas) : string
{
    $KdramaToShow = '<ul>';
    foreach ($Kdramas as $Kdrama) {
        $KdramaToShow .= '<li>' . $Kdrama['Kdrama'] . ' - ' . $Kdrama['ReleaseYear'] . ' - ' . $Kdrama['Synopsis'] . ' - ' . $Kdrama['Starring'] . '</li>';
    }
    $KdramaToShow .= '</ul>';
    return $KdramaToShow;
}