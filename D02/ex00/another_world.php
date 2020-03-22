<?php 

    $chaine = $argv;
    $chaine = preg_replace("/\s+/"," ",$chaine);

    $i = 1;
    while ($i < count($chaine))
    {
        echo "$chaine[$i]\n";
        $i++;
    }

?>