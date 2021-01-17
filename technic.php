<div id="technic">
    <div class="technic_text">
        <h1>Cloud and Autonomic Computing</h1>
        <p>
            Dans le cadre de ce cours, nous avons été amenés à étudier deux types de technologies permettant de déployer
            des applications : les machines virtuelles et les conteneurs. Après une étude théorique des différentes
            technologies nous avons pu utiliser OpenStack pour déployer nos machines virtuelles. L’objectif final de
            ce cours était de simuler le déploiement d’une application simple répartissant ses services sur différente
            machine virtuelle sur différent réseaux privés. Nous avons ainsi suivi une architecture classique de déploiement
            d’application avec les services Backend hébergés sur notre réseau privé, le service Frontend hébergé sur le
            réseau d’un client avec un accès par des ordinateurs sur un réseau publique. Ce cours nous a permis de développer
            nos compétences en architecture réseau, système et application orientée service. 
        </p>
        <a href="<?php echo $home_url . 'files/cloud_computing_report.pdf'; ?>" download>Télécharger le rapport</a>
    </div>
    <img src="<?php echo $home_url . 'pictures/openstack_logo.png'; ?>" class="profil_picture" alt="logo openstack"/>
    <img src="<?php echo $home_url . 'pictures/springboot_logo.png'; ?>" class="profil_picture" alt="logo springboot"/>
    <div class="technic_text">
        <h1>Service Oriented Architecture</h1>
        <p>
            Dans le cadre de ce cours nous devions réaliser une application web permettant d’afficher des informations
            provenant de capteur en suivant une méthode agile. Nous avons décidé de répondre au problème suivant :
            réaliser une application web d’affichage et de gestion automatique de la température dans les salles de L’INSA
            de Toulouse. Nous avons développé différentes fonctionnalités :
        </p>
        <ul>
            <li>Affichage de la température pour chaque salle</li>
            <li>Affichage de l’état des fenêtres pour chaque salle</li>
            <li>Historique sous forme graphique des températures pour chaque salle</li>
            <li>Maintien de la température d’une salle entre 18 et 23 degrés grâce à une ouverture/fermeture automatique des fenêtres</li>
        </ul>
        <p>
            Cette application suit une architecture orientée système intégrant une application web et une API REST
            que nous avons développé à l’aide de Spring Boot. Grâce à ce projet j’ai pu développer des compétences en
            architecture orientée système, API REST, Spring Boot et utilisation de méthode agile.
        </p>
        <a href="<?php echo $home_url . 'files/Rapport_IL.pdf'; ?>" download>Télécharger le rapport</a><br \><br \>
        <a href="https://github.com/lucasbacle/insa-room-management" >Dépôt GitHub</a>
    </div>
    <div class="technic_text">
        <h1>Middleware for the Internet of Things</h1>
        <p>
            L’objectif de ce cours était de comprendre et d’utiliser différents Middleware utilisés dans le monde de l’IOT.
            Nous avons réalisé une série de travaux pratiques nous présentant différentes technologies. Nous avons d’abord
            vu le standard MQTT et son système de publication/souscription. Puis nous avons étudier le standard généraliste
            oneM2M et avons interagis avec lui utilisant une API REST. Finalement, nous avons utilisé Node-RED qui est une
            solution logicielle permettant de simplement communiquer avec nos réseaux de capteurs et de facilement réaliser
            une interface graphique pour l’utilisateur. Grâce à ce cours j’ai eu l’occasion d’apprendre à utiliser différent
            Middleware pour l’IOT mais également savoir comment les mettre en place ou choisir le Middleware le mieux adapté
            à mon problème. 
        </p>
        <a href="<?php echo $home_url . 'files/iot_report.pdf'; ?>" download>Télécharger le rapport</a>
    </div>
    <img src="<?php echo $home_url . 'pictures/onem2m_logo.png'; ?>" class="profil_picture" alt="logo onem2m"/>
    <img src="<?php echo $home_url . 'pictures/r_logo.jpg'; ?>" class="profil_picture" alt="logo r"/>
    <div class="technic_text">
        <h1>Data Processing and Analysis: Big Data</h1>
        <p>
            Dans le cadre de ce cours nous avons étudié le traitement d’information dans le cadre du Big Data utilisant
            le langage R. Nous n’avions jamais utilisé ce langage, ainsi nous avons pu acquérir de nouvelle compétence
            dans un langage utilisant une approche différente et permettant une gestion plus facile de la donnée. Suite
            à une formation, nous avons réalisé un projet visant à étudier un dataset trouvé sur Internet. Nous avons
            choisi d’étudier l’impact de la consommation d’alcool sur les étudiants. Pour cela nous avons utilisé une étude
            mené par P. Cortez et A. Silva sur deux écoles au Portugal. Nous avons analysé les données et représenté
            les différents résultats sous formes graphiques afin de comprendre le véritable impact de la consommation
            d’alcool sur les étudiants ainsi que ses origines. 
        </p>
        <a href="<?php echo $home_url . 'files/R_report.pdf'; ?>" download>Télécharger le rapport</a>
    </div>
    <div class="technic_text">
        <h1>Processing Semantic Data</h1>
        <p>
            L’objectif de ce cours était de comprendre et d’utiliser des ontologies dans le cadre du web sémantique.
            Dans un premier temps nous avons étudié les différents principes d’une ontologie comme les classes et
            propriétés à l’aide du logiciel Protégé. Nous avons ainsi pu comprendre les différents mécanismes qu’utilise
            un raisonneur afin de déduire des propriétés et informations sur notre ontologie. Dans un second temps nous
            avons écrit un code Java qui nous permet d’interagir avec une ontologie. On peut ainsi facilement imaginer créer
            une application web capable d’utiliser des ontologies et raisonner dessus. 
        </p>
        <a href="<?php echo $home_url . 'files/semantic_web_report.pdf'; ?>" download>Télécharger le rapport</a>
    </div>
    <img src="<?php echo $home_url . 'pictures/semantic_web_logo.jpg'; ?>" class="profil_picture" alt="logo web semantic"/>
    <img src="<?php echo $home_url . 'pictures/WSN_logo.png'; ?>" class="profil_picture" alt="logo wsn"/>
    <div class="technic_text">
        <h1>Protocols and communication</h1>
        <p>
            Dans le cadre de ce cours nous avons étudié différents protocoles MAC adaptés aux réseaux de capteurs sans fils.
            Nous avons réalisé des recherches et une étude des différents protocoles existant dans ce type de réseau. L’objectif
            est de comprendre leur fonctionnement et de déterminer les avantages et défauts de chacun. Nous avons classé ces
            protocoles basé sur plusieurs paramètres comme la consommation d’énergie, synchrone/asynchrone, simple couche/multi
            couche… Ainsi lorsque nous serons confrontés à un problème nous seront choisir la solution la plus adapté au problème
            donné.
        </p>
        <a href="<?php echo $home_url . 'files/MAC_protocols_dedicated_to_WSN.pdf'; ?>" download>Télécharger le rapport</a>
    </div>
    <div class="technic_text">
        <h1>Méthodes de créativité</h1>
        <p>
            Ce cours nous a introduit la méthode d’innovation TRIZ. Nous avons étudié le processus suivit par cette
            méthode afin d’innover sur un produit donné. Après avoir compris ses principes nous avons pu appliquer
            cette méthode sur un objet simple du quotidien : la brosse à dent. Le but était de comprendre et d’appliquer
            les différentes étapes de la méthode TRIZ afin de comprendre l’évolution de notre objet et de proposer une 
            innovation afin de l’améliorer. 
        </p>
        <a href="<?php echo $home_url . 'files/triz_report.pdf'; ?>" download>Télécharger le rapport</a>
    </div>
    <img src="<?php echo $home_url . 'pictures/triz_logo.png'; ?>" class="profil_picture" alt="logo triz"/>
    <img src="<?php echo $home_url . 'pictures/starlink_logo.png'; ?>" class="profil_picture" alt="logo starlink"/>
    <div class="technic_text">
        <h1>From 3G To 5G</h1>
        <p>
            Le but de ce cours était d’étudier les protocoles et technologies liés à la 5G. Après une série de cours
            magistraux sur la 5G, il nous a été proposé de travailler et faire une présentation sur un technologie en
            rapport avec la 5G. Nous avons donc décidé de réaliser des recherches sur une alternative à la 5G le projet
            Starlink de SpaceX. Starlink a pour projet de déployer une constellation de satellite basse altitude connectant
            ainsi le monde entier à internet, remplaçant la fibre optique et les différentes technologies cellulaires. 
        </p>
        <a href="<?php echo $home_url . 'files/Starlink.pptx'; ?>" download>Télécharger la présentation</a>
    </div>
    <div class="technic_text">
        <h1>MOSH</h1>
        <p>
            Au cours de ce projet, nous avons eu l’occasion de créer un système d’acquisition de donné. L’objectif était de
            créer un système de détection de gaz qui communiquerai avec une application dans le cloud. Dans un premier
            temps nous avons fabriqué un capteur de gaz utilisant des nanoparticules. Puis nous avons conçu un circuit
            électronique incluant le capteur fabriqué précédemment et capable de traiter et envoyer via le réseau LoRa
            les données de ce dernier. Finalement, nous avons développé une application web de type SOA utilisant Spring
            Boot et développant une API REST capable de communiquer avec The Things Network.Cette application affiche les
            dernières données reçues depuis notre système mais possède également un historique complet des relevés. 
        </p>
        <a href="<?php echo $home_url . 'files/sensor_report.pdf'; ?>" download>Télécharger le rapport</a><br /><br />
        <a href="<?php echo $home_url . 'files/Datasheet.pdf'; ?>" download>Télécharger la datasheet</a><br /><br />
        <a href="https://github.com/MOSH-Insa-Toulouse/2020_BACLE_GEHIN" >Dépôt GitHub</a>
    </div>
    <img src="<?php echo $home_url . 'pictures/ttn_logo.png'; ?>" class="profil_picture" alt="logo ttn"/>
</div>
