<?php

    //$home_url = "http://localhost/Portfolio/";
    $home_url = "https://etud.insa-toulouse.fr/~cgehin/Portfolio/";

    include "config.php";
    include "header.php";
        
    if (!isset($_GET["current_tab"]) || $_GET["current_tab"] === "home") {
        include "presentation.php";
    }
    elseif ($_GET["current_tab"] === "experience") {
        include "experience.php";
    }
    elseif ($_GET["current_tab"] === "technique") {
        include "technic.php";
    }
    elseif ($_GET["current_tab"] === "analyse") {
        include "analysis.php";
    }
        
    include "footer.php";
?>
