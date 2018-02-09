<?php

$coordonnees = array (
    'prenom' => 'Jérôme',
    'nom' => 'Ballue',
    'adresse' => '3 Rue du Paradis',
    'ville' => 'Aubevoye',
    'code postal' => '27940',
    'email' => 'jerome.ballue@gmail.com',
    'date de naissance' => '1995-11-10');

foreach($coordonnees as $cle => $element)
{
    echo '[' . $cle . '] vaut ' . $element . '<br />';
}

$date = new DateTime('1995-11-10');
echo $date->format('d-m-y H:i:s');

?>
