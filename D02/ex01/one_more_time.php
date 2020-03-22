<?php 

    if ($argc < 2)
        return;

    $chaine = $argv[1];
    $date = explode(" ",$chaine);
    $hours = explode(":",$date[4]);

    $day = array("Lundi" , "lundi", "Mardi" , "mardi", "Mercredi" , "mercredi", "Jeudi" , "jeudi", "Vendredi" , "vendredi", "Samedi" , "samedi", "Dimanche" , "dimanche");
    $month = array("janvier", "Janvier", "février", "Février", "mars", "Mars", "avril", "Avril", "mai", "Mai", "juin", "Juin", "juillet", "Juillet", "aout", "Aout", "septembre", "Septembre", "octobre", "Octobre", "novembre", "Novembre", "decembre", "Decembre");

    if(count($date) != 5)
    {
        echo "Wrong Format\n";
        return;
    } 
    if((in_array(("$date[0]"),$day) == FALSE) || (in_array(("$date[2]"),$month) == FALSE))
    {
        echo "Wrong Format\n";
        return;
    } 
    if((is_numeric("$date[1]") || is_numeric("$date[3]")) == FALSE )
    {
        echo "Wrong Format\n";
        return;
    }
    if((is_numeric("$hours[0]") || is_numeric("$hours[1]") || is_numeric("$hours[2]")) == FALSE )
    {
        echo "Wrong Format\n";
        return;
    }
    if($date[1] > 31 || $date[1] < 1 || $date[3] > 2020 || $date[3] < 1970 || $hours[0] > 23 || $hours[0] < 0)
    {
        echo "Wrong Format\n";
        return;
    }
    if($hours[1] > 59 || $hours[1] < 0 || $hours[2] > 59 || $hours[2] < 0)
    {
        echo "Wrong Format\n";
        return;
    }

    echo strtotime($chaine);

?>