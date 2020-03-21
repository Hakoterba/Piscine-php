<?php

    function epur_str($chaine)
    {
        $chaine = trim($chaine, "\n\r\0\x0B");
        $chaine = preg_replace('/\s+/', ' ' , $chaine);
        return ($chaine);
    }
    
    $i = 1;
    while ($i < count($argv))
    {
        echo epur_str($argv[$i]);
        $i++;
    }

?>