<?php 

    $chaine = array();
    $i = 1;
    while ($i < count($argv)) 
    {
        if (strpos($argv[$i], " ") != FALSE) 
        {
			$switch = explode(" ", $argv[$i]);
			$chaine = array_merge($chaine, $switch);
		}
        else 
        {
			array_push($chaine, $argv[$i]);
        }
        $i++;
    }
    
    $i = 0;         
    sort($chaine, SORT_STRING);   
    while ($i < count($chaine))
    {
        echo "$chaine[$i]\n";
        $i++;
    }

?>