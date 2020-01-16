
<!-- For all headers except the Index one, ids and headings are set in individual PHP files  -->

<?php echo '
<header class="secondary_header" id="' . $header_id . '"> '?>

    <div class="dark_overlay"></div>

    <div class="logo" onclick="location.href='index.php';"><img src="./img/logo.png" alt=""></div>

    <div id="nav_btn"></div>

    <div class="navigation">
        <!-- <div id="nav_sidemenu"> nav_sidemenu goes here -->
        <div class="side_menu_container">
        <div id="close_btn"></div>

            <ul>
                <li><a href="index.php">Úvod</a><hr></li>
                <li><a href="sluzby.php">Služby</a><hr></li>
                <li><a href="objednavka.php">Objednávka</a><hr></li>
                <li><a href="o_nas.php">O nás</a><hr></li>
                <li><a href="kontakt.php">Kontakt</a><hr></li>
                <li><a href="obchodni_podminky.php">Obchodní podmínky</a><hr></li>
            </ul>
        </div>
        <!-- </div> -->
    </div>

    <?php echo '
    <div class="secondary_title">
        <h1> '. $minor_heading .' </h1>
    </div> ';
    ?>

</header>

