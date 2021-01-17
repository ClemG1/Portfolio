<?php
    
    //$home_url = "http://localhost/Portfolio/";
    $home_url = "https://etud.insa-toulouse.fr/~cgehin/Portfolio/";

    include "../config.php";
    include "../header.php";
    
    ?>

    <div id="experience_description">
        <p>
            De juin 2020 à septembre 2020 j’ai réalisé un stage d’ingénieur en logiciel et réseaux à Labosud.
            Labosud est un regroupement de cabinet médical d’analyse médicale appartenant au groupe Inovie,
            possédant des laboratoires partout dans la région Occitanie. Labosud travaille en partenariat,
            notamment pour les ressources informatiques, avec d’autre laboratoire appartenant au groupe Inovie
            tels que Biomed34 ou CBM. Au cours de ce stage j’ai réalisé trois missions distinctes : création d’une
            application pour configurer des switches à distance, correction et optimisation du librairie PowerShell
            et réalisation d’une application web pour les techniciens. Ce stage fut particulier car il s’inscrivait
            dans le contexte de la crise du Covid-19 mais également dans le déménagement du siège social de l’entreprise
            vers une nouvelle location.
        </p>
        <img src="<?php echo $home_url . 'pictures/logo_labosud.png'; ?>" alt="logo labosud"/>
    </div>
    <div id="experience_description">
        <img src="<?php echo $home_url . 'pictures/aruba_dashboard.png'; ?>" alt="aruba dashboard"/>
        <p>
            Ma première mission a été de créer un logiciel permettant de configurer un grand nombre de switch à distance
            et simultanément. J’ai donc réalisé une application pour Windows utilisant C# et Powershell. Le C# m’a permis
            de réaliser une interface utilisateur (image ci-contre) et de lancer et gérer mes threads. Chaque thread lance
            un script Powershell qui va utiliser l’interface API des switches afin d’ajouter la nouvelle configuration. Il
            est également possible de réaliser des actions tels que des mises à jour ou des reboots à distance du matériel.
            L’interface indique également si un des switches est éteint ou injoignable indiquant en temps réel le statut de
            chaque équipement.
        </p>
    </div>
    <div id="experience_description">
        <p>
            Ma deuxième mission a été d’optimiser et corriger une librairie PowerShell utilisé pour gérer automatiquement
            notre Active Directory. Chaque soir un certain nombre d’opérations étaient effectuées pour ajouter, supprimer
            ou modifier les informations sur les employés de Labosud entré dans la journée par le service RH. Cependant
            cette librairie, en plus d’inclure des erreurs de dupliqua, avaient besoin d’être optimisée et généralisée afin
            de pouvoir intégrer les autres laboratoires du groupe Inovie à l’Active Directory. La réécriture de la librairie
            a permis d’éliminer des erreurs de doublons, de gérer les différents groupes d’accès utilisateur de façon
            automatique et d’intégrer les autres laboratoires de façon dynamique. De plus, cette réécriture m’a permis de
            mettre en place un système de récupération de mot de passe oublié via une interface web.
        </p>
        <img src="<?php echo $home_url . 'pictures/logo_powershell.png'; ?>" alt="logo powershell"/>
    </div>
    <div id="experience_description">
        <img src="<?php echo $home_url . 'pictures/plaque_pcr.png'; ?>" alt="plaque pcr"/>
        <p>
            Finalement ma dernière mission a été de créer une application web pour les techniciens des centres de prélèvement
            covid afin de faciliter leur travail. Début septembre 2020 une nouvelle méthode de prélèvement PCR est sortie mais
            les automates livrés par le constructeur Roche ne possédait pas d’interface utilisateur. Ma mission a été de
            développer en trois jours une application web permettant aux techniciens de rentrer différentes informations sur
            les prélèvements réaliser afin de les injecter par la suite dans l’automate. L’application permettait au technicien
            de rentré les informations sur les prélèvements l’un après l’autre. Ces informations pouvaient être modifier et
            consulter dynamiquement. Un résumé était proposé à la fin ou les valeurs pouvaient être également modifié. Une
            fois validé l’application génère un fichier CSV à intégrer dans l’automate. Les sessions pouvaient être enregistré
            permettant au technicien de quitter son poste et reprendre plus tard.
        </p>
    </div>

    <?php
    include "../footer.php";
?>

