<?PHP
    while (true)
    {
        echo "Entrez un nombre: ";
        $handle = fopen ("php://stdin","r");
        $ligne = fgets($handle);
        if ($ligne == FALSE)
            break ;
        $number = trim($ligne, "\n\r\0\x0B");
        if (is_numeric($number))
        {
            if ($number%2 == 1)
                echo "Le chiffre $number est Impair\n";
            else
                echo "Le chiffre $number est Pair\n"; 
        }
        else 
            echo "'$number' n'est pas un chiffre\n";
    }
?>