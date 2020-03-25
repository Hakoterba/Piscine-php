<?php 

    if (isset($_GET["name"]))
        $name = $_GET["name"];
    else
        return;

    if ($_GET["action"] == "set" && isset($_GET["value"])) 
        setcookie($name, $_GET["value"], time() + 3600);
    else if ($_GET["action"] == "get")
        echo $_COOKIE[$name];
    else if ($_GET["action"] == "del")
        setcookie($name, "", time() + 3600);
        
?>
