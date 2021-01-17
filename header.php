<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="Portfolio de GEHIN Clément">
        <meta name="author" content="Gehin Clement">
        <title><?php printf("%s - %s",$config["title"],$config["author"]); ?></title>
        <link rel="stylesheet" href="<?php echo $home_url . 'style.css'; ?>">
    </head>
    <body>
        <div id="default_style">
            <div id="header">
                <img src="<?php echo $home_url . 'pictures/banner.png'; ?>" alt="header picture"/>
                <div class="menu">
                    <?php if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on') { 
                        $protocol = "https";
                    }
                    else {
                        $protocol = "http";
                    }
                    /*
                    $url_complete = $protocol . "://" . $_SERVER["HTTP_HOST"] . $_SERVER['REQUEST_URI'];
                    $url_parts = explode("?", $url_complete);
                    $url = $url_parts[0];
                     */
                    //$url = "http://localhost/Portfolio/index.php";
                    $url = "https://etud.insa-toulouse.fr/~cgehin/Portfolio/index.php";
                    ?>
                    <table>
                        <tbody>
                            <tr>
                                <td class="empty_menu_cell"></td>
                                <td class="menu_item"><a href="<?php echo $url . '?current_tab=home';?>">Présentation</a></td>
                                <td class="inter_menu_cell"></td>
                                <td class="menu_item"><a href="<?php echo $url . '?current_tab=experience';?>">Expérience</a></td>
                                <td class="inter_menu_cell"></td>
                                <td class="menu_item"><a href="<?php echo $url . '?current_tab=technique';?>">Technique</a></td>
                                <td class="inter_menu_cell"></td>
                                <td class="menu_item"><a href="<?php echo $url . '?current_tab=analyse';?>">Analyse</a></td>
                                <td class="inter_menu_cell"></td>
                                <td></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            

