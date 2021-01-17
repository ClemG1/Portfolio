<?php
    
    //$home_url = "http://localhost/Portfolio/";
    $home_url = "https://etud.insa-toulouse.fr/~cgehin/Portfolio/";

    include "../config.php";
    include "../header.php";
    
?>

    <div id="experience_description">
        <p>
            Le RAID INSA-INP est une association étudiante organisant des évènements sportifs. Notre évènement le plus
            connus est un RAID (course à pied, vélo et canoé) organisé chaque année. Le RAID est ouvert à tous et est
            devenu le RAID le plus grand de France organisé par des étudiants. J’ai rejoint l’association il y a deux
            ans en tant que nouveau Webmaster. Ce poste me permet de développer mes compétences en PHP, SQL et JavaScript.
            De plus j’ai pu découvrir et apprendre à utiliser WordPress.
        </p>
        <img src="<?php echo $home_url . 'pictures/logo_raid_insa_inp.png'; ?>" alt="logo raid"/>
    </div>
    <div id="experience_description">
        <img src="<?php echo $home_url . 'pictures/helloasso_logo.png'; ?>" alt="logo HelloAsso"/>
        <p>
            Parmi les améliorations que j’ai pu apporter, j’ai notamment intégré un système de paiement en ligne lors des
            inscriptions. Pour cela je passe par une solution proposée par HelloAsso.  Après une comparaison avec les autres
            solutions tels que PayPal ou par la banque de l’association, j’ai décidé d’utiliser HelloAsso car ils ne prennent
            pas de commission sur les paiements. J’ai donc intégré les IFrame de HelloAsso au site web. J’ai également repensé
            la procédure d’inscription afin de l’adapter au nouveau moyen de paiement proposé. J’ai également dû repenser une
            partie de la base de données afin de pouvoir suivre les paiements de la façon la plus claire et simple possible.
        </p>
    </div>
    <div id="experience_description">
        <p>
            J’ai également apporté des niveaux de sécurités supplémentaire à nos formulaires. Ma principale action a été
            de lutter contre des attaques par injection SQL. Pour cela, j’ai développé des systèmes de sécurité sur les
            champs libres. Par exemple, je réalise du contrôle de chaîne de caractère à l’aide d’expression régulière.
            J’ai également ajouté une protection en travaillant sur les escaping inputs limitant les attaques comprenant
            des caractères spéciaux comme ‘ ou « 
        </p>
        <img src="<?php echo $home_url . 'pictures/sql_injection.png'; ?>" alt="sql injection"/>
    </div>

<?php
    include "../footer.php";
?>

