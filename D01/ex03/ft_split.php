<?php 

    function ft_split($chaine) {
        $chaine = preg_replace("/\s+/", ' ', $chaine);
        return (explode(' ', $chaine));
    }

?>