<?php

$bateau = array("Manureva" => array("Equipage" => 3,"Passagers" => 4),
                "Sirius"   => array("Equipage" => 4,"Passagers" => 6),
                "Surcouf"  => array("Equipage" => 8,"Passagers" => 15)
                );

foreach ($bateau as $NomBateau => $Infos)
{
    if($Infos["Passagers"] > 10)
    {
        echo $NomBateau;
    }
}

?>