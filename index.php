<!DOCTYPE html>
<html lang="cs">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shortcut icon" href="">
        <link rel="stylesheet" href="./css/_global/styles.css">
        <link rel="stylesheet" href="./css/index/index.css">
        <title>Ženich & Nevěsta | Domů</title>
    </head>
    <body>
        <!-- POP-UP -->

        <div class="pop-up">
            <p>Upozornění: Tato stránka slouží pouze jako školní projekt.</p>
            <button id="pop-up_close">Ok</button>
        </div>

        <!-- HEADER -->

        <?php include './includes/index_header.php'; ?>

        <!-- FIRST SECTION -->

        <section class="first_section">

            <ul>
                <li>
                    <div id="item_top">
                        <img src="./img/icons/pencil.png" alt="">
                        <h2>Od návrhu po provedení</h2>
                    </div>
                    <div id="item_bottom">
                        <p>Navrhněte nám Vaši ideální svatbu a nechte na nás, abychom Vám ji realizovali.</p>
                     </div>
                </li>

                <li>
                    <div id="item_top">
                        <img src="./img/icons/calculator.png" alt="">
                        <h2>Kalkulace ceny zdarma</h2>
                     </div>
                    <div id="item_bottom">
                        <p>Nastavíme Vám přijatelnou cenu a to zcela bezplatně.</p>
                    </div>
                </li>

                <li>
                    <div id="item_top">
                        <img src="./img/icons/hourglass.png" alt="">
                        <h2>Rychlé jednání</h2>
                    </div>
                    <div id="item_bottom">
                        <p>S námi stačí strávit opravdu jen chvilku a zařídíme Vám tu nejlepší možnou variantu, díky našemu zkušenému týmu.</p>
                     </div>
                </li>

                <li>
                    <div id="item_top">
                        <img src="./img/icons/wine.png" alt="">
                        <h2>Jídlo, dobroty a víno</h2>
                    </div>
                    <div id="item_bottom">
                        <p>Zařídíme pro vás kompletní pohostinství. Oběd z kvalitních surovin, dobroty od vynikající cukrářky a to nejlepší víno!</p>
                    </div>
                </li>

                <li>
                    <div id="item_top">
                        <img src="./img/icons/camera.png" alt="">
                        <h2>Fotografie a videa</h2>
                    </div>
                    <div id="item_bottom">
                        <p>Zařídíme pro Vás toho nejlepšího fotografa a celou svatbu Vám i natočíme!</p>
                    </div>
                </li>

                <li>
                    <div id="item_top">
                        <img src="./img/icons/heart.png" alt="">
                        <h2>Pro Vás jen to nejlepší!</h2>
                    </div>
                    <div id="item_bottom">
                        <p>Těšíme se na budoucí spolupráci a uděláme vše co je v našich silách, abychom Vám zajistili jen to nejlepší!</p>
                    </div>
                </li>
            </ul>

        </section>

        <!-- SECOND SECTION -->

        <section class="second_section">

            <div class="dark_overlay"></div>

            <div id="heading">
                <h1>Reference</h1>
            </div>

            <div id="content">
                <ul>
                    <li>
                        <img src="./img/icons/refer.png" alt="">
                        <p id="r_text">„Mám opravdovou radost! Perfektní od návrhu až po samotnou svatbu.“</p>
                        <p id="r_name">Marie Hajná</p>
                    </li>
                    <li>
                        <img src="./img/icons/refer.png" alt="">
                        <p id="r_text">„Rychlé jednání a úžasné zpracování. S manželkou jsme maximálně spokojeni.“</p>
                        <p id="r_name">Jaroslav Dvořák</p>
                    </li>
                    <li>
                        <img src="./img/icons/refer.png" alt="">
                        <p id="r_text">„Super práce za super ceny a také skvělá komunikace!“</p>
                        <p id="r_name">Lucie Nová</p>
                    </li>
                </ul>
            </div>

        </section>

        <!-- FOOTER -->
    
        <?php include './includes/footer.php'; ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="./script/jquery.cookie.js"></script>
        <script src='./script/main_script.js'></script>
    </body>
</html>