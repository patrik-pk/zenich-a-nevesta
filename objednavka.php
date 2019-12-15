<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="./css/_global/styles.css">
    <link rel="stylesheet" href="./css/order/order.css">
    <title>Ženich & Nevěsta | Objednávka</title>
  </head>
  <body class="order">

    <!-- POP-UP -->

    <div class="pop-up">
        <p>Upozornění: Tato stránka slouží pouze jako školní projekt.</p>
        <button id="pop-up_close">Ok</button>
    </div>

    <!-- HEADER -->

    <?php $header_id = "order_header"; $minor_heading = "On-line objednávka";  include './includes/minor_header.php'; ?>

    <!-- SECTION -->

    <section class="order_section">
      <div class="order_container">
        <ul>
          
          <!-- Date and person count -->
          <li class="li_main">
            <h4>Datum a počet osob</h4>
            <hr>
            <div id="date_person_container">
              <div id="date">
                <h5>Datum svatby:</h5>
                <input type="date">
              </div>

              <div id="person">
                <h5>Počet osob: </h5>
                <input type="text" maxlength="4">
              </div>
            </div>
          </li>

          <!-- Locations -->
          <li class="li_main">
            <h4>Výběr lokality</h4>
            <hr>
            <ul>        
              <div class="li_container">
                <li>
                  <div id="h5_container">
                  <h5>Lednice</h5>
                  </div>

                  <div id="select_container">   
                    <select name="led_select" id="">
                      <option value="none"></option>
                      <option value="11000">LL/01 - Zámek - hodina mimo otevírací dobu zámku - 11.000 Kč</option>
                      <option value="24000">LL/02 - Zámek - v provozních hodinách zámku - 24.000 Kč</option>
                      <option value="120000">LL/03 - Zámek - celý den - 120.000 Kč</option>
                      <option value="1300">LL/04 - Park - za hodinu - 1.300 Kč</option>
                      <option value="26000">LL/05 - Park - za celý den - 26.000 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>
              </div>


              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Valtice</h5>
                  </div>
                  
                  <div id="select_container">
                    <select name="val_select" id="">
                      <option value="none"></option>
                      <option value="11000">LV/01 - Zámecká kaple - hodina ve dnech PO-PÁ - 11.000 Kč</option>
                      <option value="15000">LL/02 - Zámecká kaple - hodina v sobotu - 15.000 Kč</option>
                      <option value="21000">LV/03 - Španělská konírna - 21.000 Kč</option>
                      <option value="48000">LV/04 - Zimní jízdárna - 48.000 Kč</option>
                      <option value="5400">LV/05 - Salónek nad jízdárnou - 5.400 Kč</option>
                      <option value="8000">LV/06 - Bílý sál - 8.000 Kč</option>
                      <option value="7500">LV/07 - Mramorový sál - 7.500 Kč</option>
                      <option value="11500">LV/08 - Sál a salónek loveckého zámečku Rendez-vous - 11.500 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>
              </div>


              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Mikulov</h5>
                  </div>
                  
                  <div id="select_container">
                    <select name="mik_select" id="">
                      <option value="none"></option>
                      <option value="9000">LM/01 - Velký zámecký sál - 9.000 Kč</option>
                      <option value="5300">LM/02 - Vinárna - 5.300 Kč</option>
                      <option value="7800">LM/03 - Nástupní sál - 7.800 Kč</option>
                      <option value="8200">LM/04 - Sál předků - 8.200 Kč</option>
                      <option value="4900">LM/05 - Sala terrena - 4.900 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>


              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Další prostory pro obřad</h5>
                  </div>
                  
                  <div id="select_container">
                    <select name="mik_select" id="">
                      <option value="none"></option>
                      <option value="14000">LD/01 - Reistna - 14.000 Kč</option>
                      <option value="11200">LD/02 - Hraniční zámeček Hlohovec - 11.200 Kč</option>
                      <option value="6400">LD/03 - Kaplička na Svatém kopečku - 6.400 Kč</option>
                      <option value="6200">LD/04 - Kostel Lednice - 6.200 Kč</option>
                      <option value="6500">LD/05 - Kostel Sv. Václava - 6.500 Kč</option>
                      <option value="7900">LD/06 - Vinařství u Kapličky - 7.900 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>
            </ul>
          </li>

          <!-- Ceremony decoration -->

          <li class="li_main">
            <h4>Výzdoba obřadního místa</h4>
            <hr>
            <ul>
              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Výzdoba obřadního místa</h5>
                  </div>

                  <div id="select_container">   
                    <select name="vom_select" id="">
                      <option value="none"></option>
                      <option value="1700">V/01 - Svatební oltář - 1.700 Kč </option>
                      <option value="1500">V/02 - Zdobená organzou ve Vámi zvolené barvě - 1.500 Kč </option>
                      <option value="2200">V/03 - Svatební ulička - 2.200 Kč </option>
                      <option value="2500">V/04 - Obřadní stůl s bílým ubrusem - 2.500 Kč </option>
                      <option value="50">V/05 - Židle k obřadu - 50 Kč/ks </option>
                      <option value="890">V/06 - Květinové stojany - 890 Kč/ks </option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>
              </div>
            </ul>
          </li>

          <!-- Menus -->

          <li class="li_main">
            <h4>Svatební menu</h4>
            <hr>
            <ul>
              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Svatební menu</h5>
                  </div>

                  <div id="select_container">   
                    <select name="menu_select" id="">
                      <option value="none"></option>
                      <option value="610" class="person_based">M/01 - Tradiční svíčková na smětaně - 610 Kč/osoba </option>
                      <option value="540" class="person_based">M/02 - Špalíčky z vepřové panenky a kuřecích prsou - 540 Kč/osoba </option>
                      <option value="450" class="person_based">M/03 - Grilovaný losos s jemnou limetkovou omáčkou - 450 Kč/osoba </option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>
            </ul>
          </li>

          <!-- Photograph, cameraman and music -->

          <li class="li_main">
            <h4>Fotograf, kameraman a hudba</h4>
            <hr>
            <ul>
              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Fotograf</h5>
                  </div>

                  <div id="select_container">   
                    <select name="photograph_select" id="">
                      <option value="none"></option>
                      <option value="3300">F/01 - Obřad - 3.300 Kč  </option>
                      <option value="3800">F/02 - Hostina - 3.800 Kč </option>
                      <option value="6000">F/03 - Obřad + Hostina - 6.000 Kč  </option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>

              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Kameraman</h5>
                  </div>

                  <div id="select_container">   
                    <select name="cameraman_select" id="">
                      <option value="none"></option>
                      <option value="2700">F/04 - Obřad - 2.700 Kč</option>
                      <option value="2300">F/05 - Hostina - 2.300 Kč</option>
                      <option value="4000">F/06 - Obřad + Hostina - 4.000 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>

              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Hudba</h5>
                  </div>

                  <div id="select_container">   
                    <select name="music_select" id="">
                      <option value="none"></option>
                      <option value="3800">H/01 - Varhaník nebo pianista či solokytara - 3.800 Kč </option>
                      <option value="4200">H/02 - Violoncello a piano nebo harfa - 4.200 Kč </option>
                      <option value="4600">H/03 - Smyčcový kvartet - 4.600 Kč </option>
                      <option value="9600">H/04 - Kytara, klavír a sólový nástroj - 9.600 Kč </option>
                      <option value="7000">H/05 - DJ (hudební doprovod a moderování) - 7.000 Kč/5 hodin</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>
            </ul>
          </li>

          <!-- Addition offer -->

          <li class="li_main">
            <h4>Doplňková nabídka</h4>
            <hr>
            <ul>
              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Vizážistka</h5>
                  </div>

                  <div id="select_container">   
                    <select name="makeup_select" id="">
                      <option value="none"></option>
                      <option value="530">D/01 - Zkouška líčení, originální líčení, účes - 530 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>

              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Projížďka svatebním kočárem</h5>
                  </div>

                  <div id="select_container">   
                    <select name="carriage_select" id="">
                      <option value="none"></option>
                      <option value="3500">D/02 - pronájem na 1 hodinu - 3.500 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>

              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Pronájem limuzíny</h5>
                  </div>

                  <div id="select_container">   
                    <select name="limousine_select" id="">
                      <option value="none"></option>
                      <option value="12000">D/03 - pronájem na 3 hodiny do 120km - 12.000 Kč </option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>

              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Svatební party stany</h5>
                  </div>

                  <div id="select_container">   
                    <select name="tent_select" id="">
                      <option value="none"></option>
                      <option value="3000">D/04 - Rozměry od 3 x 4 m - 3.000 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>

              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Dorty</h5>
                  </div>

                  <div id="select_container">   
                    <select name="cake_select" id="">
                      <option value="none"></option>
                      <option value="3200">D/05 - Malý (40 porcí) - 3.200 Kč</option>
                      <option value="6700">D/06 - Střední (70 porcí) - 6.700 Kč</option>
                      <option value="11300">D/07 - Velký (120 porcí) - 11.300 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>

              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Kytice</h5>
                  </div>

                  <div id="select_container">   
                    <select name="bouquet_select" id="">
                      <option value="none"></option>
                      <option value="1400">D/08 - Kulatá - 1.400 Kč </option>
                      <option value="1700">D/09 - Převislá - 1.700 Kč </option>
                      <option value="2000">D/10 - Extravagantní - 2.000 Kč</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>

              <div class="li_container">
                <li>
                  <div id="h5_container">
                    <h5>Svatební tiskoviny</h5>
                  </div>

                  <div id="select_container">   
                    <select name="stationery_select" id="">
                      <option value="none"></option>
                      <option value="30" class="person_based">D/11 - Svatební oznámení - 30 Kč/ks</option>
                      <option value="18" class="person_based">D/12 - Jmenovky - 18 Kč/ks</option>
                      <option value="55" class="person_based">D/13 - Menu - 55 Kč/ks</option>
                      <option value="38" class="person_based">D/14 - Programy - 38 Kč/ks</option>
                      <option value="12" class="person_based">D/15 - Děkovná kartička - 12 Kč/ks</option>
                      <option value="800">D/16 - Zasedací pořádek - 800 Kč/ks</option>
                      <option value="8" class="person_based">D/17 - Obálky - 8 Kč/ks</option>
                      <option value="26" class="person_based">D/18 - Samolepicí etikety na víno či slivovici - 26 Kč/ks</option>
                      <option value="17" class="person_based">D/19 - Cedulky s žádostí o finanční dary - 17 Kč/ks</option>
                    </select>

                    <input type="text" maxlength="4" value="-">
                    <button class="column_btn"></button>
                  </div>
                </li>                
              </div>
            </ul>
          </li>

          <li class="li_main" id="li_complete">
            <hr>

            <div id="complete_container">
              <div id="total">
                <h5 class="h5_style">Celková částka k úhradě:</h5>
                <h5 class="h5_style" id="final_amount">0 Kč</h5>
              </div>

              <div id="complete_btn">
                <button id="submit_btn">Potvrdit objednávku</button>
              </div>
            </div>

            <p class="h5_style" id="order_confirmation">Objednávka byla odeslána.</p>
          </li>

        </ul>
      </div>
    </section>

    <!-- FOOTER -->

    <?php include './includes/footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./script/jquery.cookie.js"></script>
    <script src='./script/main_script.js'></script>
    <script src='./script/order.js'></script>

  </body>
</html>