<?php
    
    //$home_url = "http://localhost/Portfolio/";
    $home_url = "https://etud.insa-toulouse.fr/~cgehin/Portfolio/";

    include "../config.php";
    include "../header.php";
    
?>

<div id="technic">
    <div class="technic_text">
        <h1>Innovative Project : 3D Mapping of INSA Toulouse</h1>
        <p>
            Ce projet s’inscrit dans ma formation en tant que projet d’innovation. Nous avons d’abord réalisé un état de l’art
            sur les techniques de création de model et de carte 3D. Nous avons décidé de suivre une méthode agile pour notre
            projet utilisant des outils comme le diagramme de Gantt et Trello. Finalement nous avons réalisé une preuve 
            concept démontrant la faisabilité du projet.
        </p>
        <a href="<?php echo $home_url . 'files/final_report_3d_mapping.pdf'; ?>" download>Télécharger le rapport</a><br \><br \>
        <a href="https://github.com/ClemG1/3DMapping" >Dépôt GitHub</a>
    </div>
    <img src="<?php echo $home_url . 'pictures/recap_logo.png'; ?>" class="profil_picture" alt="logo recap"/>
</div>

<?php
    include "../footer.php";
?>

