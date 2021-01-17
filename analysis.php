<?php
    include "csv_functions.php";
    
    if (!isset($_GET["matrix"])) {
        $matrix = "smart_device";
    }
    else {
        $matrix = $_GET["matrix"];
    }
?>
<div id="matrix_section">
    <!--<button type="button" onclick="location.href = 'http://localhost/Portfolio/index.php?current_tab=analyse&matrix=smart_device';">Smart device</button>
    <button type="button" onclick="location.href = 'http://localhost/Portfolio/index.php?current_tab=analyse&matrix=communication';">Communication</button>
    <button type="button" onclick="location.href = 'http://localhost/Portfolio/index.php?current_tab=analyse&matrix=middleware_service';">Middleware & Service</button>
    <button type="button" onclick="location.href = 'http://localhost/Portfolio/index.php?current_tab=analyse&matrix=data';">Data & Application</button>
    <button type="button" onclick="location.href = 'http://localhost/Portfolio/index.php?current_tab=analyse&matrix=innovation';">Innovation</button>
    <button type="button" onclick="location.href = 'http://localhost/Portfolio/index.php?current_tab=analyse&matrix=project';">Project</button> -->
    <button type="button" onclick="location.href = 'https://etud.insa-toulouse.fr/~cgehin/Portfolio/index.php?current_tab=analyse&matrix=smart_device';">Smart device</button>
    <button type="button" onclick="location.href = 'https://etud.insa-toulouse.fr/~cgehin/Portfolio/index.php?current_tab=analyse&matrix=communication';">Communication</button>
    <button type="button" onclick="location.href = 'https://etud.insa-toulouse.fr/~cgehin/Portfolio/index.php?current_tab=analyse&matrix=middleware_service';">Middleware & Service</button>
    <button type="button" onclick="location.href = 'https://etud.insa-toulouse.fr/~cgehin/Portfolio/index.php?current_tab=analyse&matrix=data';">Data & Application</button>
    <button type="button" onclick="location.href = 'https://etud.insa-toulouse.fr/~cgehin/Portfolio/index.php?current_tab=analyse&matrix=innovation';">Innovation</button>
    <button type="button" onclick="location.href = 'https://etud.insa-toulouse.fr/~cgehin/Portfolio/index.php?current_tab=analyse&matrix=project';">Project</button>
    <?php read_csv($matrix, $home_url);?>
</div>

