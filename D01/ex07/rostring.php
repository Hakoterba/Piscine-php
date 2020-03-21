<?php 

    if (count($argv) < 2)
        return ;
    $argv[1] = trim(preg_replace('/\s+/', ' ', $argv[1]));
    $chaine = explode(' ', $argv[1]);
    $switch = $chaine[0];
    unset($chaine[0]);
    array_push($chaine, $switch);
    $chaine = array_values($chaine);

    $i = 0;
    while ($i < count($chaine))
    {
        echo trim($chaine[$i]) . " ";
        $i++;
    }
    echo "\n";

?>