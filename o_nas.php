<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="./css/_global/styles.css">
    <link rel="stylesheet" href="./css/about/about.css">
    <title>Ženich & Nevěsta | O nás</title>
  </head>
  <body class="about_us">

    <!-- POP-UP -->

    <div class="pop-up">
        <p>Upozornění: Tato stránka slouží pouze jako školní projekt.</p>
        <button id="pop-up_close">Ok</button>
    </div>

    <!-- HEADER -->

    <?php $header_id = "about_header"; $minor_heading = "O naší agentuře"; include './includes/minor_header.php'; ?>

    <!-- SECTION -->

    <section class="about_section_one">
      <div id="section_one_container">
        <div id="section_one_left"></div>
        <div id="section_one_right">
          <h2>Kdo jsme?</h2>
          <p>
            Jsme svatební agentura zabývající se organizací svateb. <br>
            Působíme na českém trhu od října roku 2018.
            Nabízíme <br>veškeré služby zabývající se organizací svateb. <br><br>

            Budeme tu pro Vás od výběru lokality a svatebních<br>
            dodavatelů až po koordinaci samotného svatebního dne. <br>
            Zařídíme Vám svatbu a pomůžeme v okamžicích svatebních příprav. <br><br>

            Realizujeme Vaše představy do nejmenších detailů,<br>
            vyjdeme vstříc Vašim finančním možnostem a <br>
            pomůžeme Vám udělat z Vašeho svatebního dne nezapomenutelnou událost. <br><br>

            Specializujeme se na svatby v Jihomoravském kraji.<br>
            Každá svatba je pro nás jedinečná. Jsme flexibilní, <br>
            vždy se přizpůsobíme aktuálním podmínkám,<br> požadavkům a trendům.
            Spolupracujeme s opravdovými profesionály,
            jejichž spolehlivost a kvalitu odvedené <br>práce jsme prověřili.
            Vždy se snažíme nabídnout našim <br>klientům
            to nejlepší možné řešení za přijatelnou cenu. <br><br>

            Věříme, že s naší nabídkou budete spokojeni a těšíme se na společnou spolupráci.
          </p>
        </div>
      </div>
    </section>

    <section class="about_section_two">
      <div id="proc_my">
        <h2>Proč právě naše firma?</h2>
        <p>
          Během svatebního dne může nastat spoustu nečekaných problémů. Snad všichni to známe.
          Někdo se zpozdí, něco nedorazí včas, někdo onemocní nebo nevyjde počasí.
          Věřte, že toto je jen zlomek nepěkných překvapení, která Vás mohou během Vašeho důležitého dne potkat.
          S naší firmou se jich však nemusíte obávat. Naši koordinátoři jsou vyškolení a zkušení.
          Díky tomu si dokáží poradit s jakoukoli nečekanou situací která může nastat. Vždy máme nachytaný " plán B " .
          Náhradní dodavatele, kosmetičku, vizážistku, oddávajícího, stany v případě deště,
          a náhradní vnitřní prostory kdyby snad padali trakaře.
          A tak se budoucí novomanželé mohou uvolnit a užívat si svoji svatbu.
          Všechny starosti a stres mohou s čistou hlavou přenechat nám.
        </p>
      </div>

      <div id="v_cene">
        <h2>V ceně našich službách naleznete</h2>
        <h4>1) rychlou a kvalitní organizace svatby</h4>
        <p>
          Na starost si vezmeme veškeré plánování, které svatbě předchází: najdeme a zamluvíme místo,
          seženeme dodavatele jídla, květin, fotografa i hudební doprovod. Připravíme svatební oznámení,
          nevěstě seženeme kadeřnici i vizážistku a zajistíme výzdobu. Žádnou z těchto formalit se nemusíte
          zabývat. Stačí zabodnout prst do katalogu a my Vám připravíme svatbu podle vašich přání.
        </p>

        <h4>2) komunikaci s úřady</h4>
        <p>
          Budeme k tomu samozřejmě potřebovat vaši plnou moc.
          Před každou svatbou je totiž potřeba zajít na matriku a vyplnit Dotazník o uzavření manželství.
          Dohodu o tom, jak se budete jmenovat po svatbě a jaké příjmení budou mít vaše děti. Matrice se nevyhnou ani
          páry, které svatbu uzavírají v kostele. Pokud se však nechcete zdržovat zbytečným papírováním, v
          rámci našich služeb to vyřídíme za vás.
        </p>

        <h4>3) koordinaci svatebního dne</h4>
        <p>
          Během celé svatby budou přítomni svatební koordinátoři (jeden a více podle velikosti a
          náročnosti svatby), kteří dohlédnou na vše potřebné: zajistí hladký průběh obřadu i celé svatby, pomohou všem
          hostům se všemi případnými problémy, jsou k dispozici pro nevěstu a ženicha, organizují a zajišťují programu během hostiny.
        </p>

        <h5>Provize za služby agentury činí 10 % z celkových nákladů na svatbu.</h5>
      </div>
    </section>

    <!-- FOOTER -->

    <?php include './includes/footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./script/jquery.cookie.js"></script>
    <script src='./script/main_script.js'></script>

  </body>
</html>