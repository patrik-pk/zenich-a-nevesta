<!DOCTYPE html>
<html lang="cs" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="">
    <link rel="stylesheet" href="./css/_global/styles.css">
    <link rel="stylesheet" href="./css/contact/contact.css">
    <title>Ženich & Nevěsta | Kontakt</title>
  </head>
  <body class="contact">

    <!-- POP-UP -->

    <div class="pop-up">
        <p>Upozornění: Tato stránka slouží pouze jako školní projekt.</p>
        <button id="pop-up_close">Ok</button>
    </div>

    <!-- HEADER -->

    <?php $header_id = "contact_header"; $minor_heading = "Kontaktujte nás"; include './includes/minor_header.php'; ?>

    <!-- SECTION -->

    <section class="contact_section">
      <div class="message_container">
        <h2 class="contact_h2">Zanechte nám zprávu!</h2>

        <form class="" action="kontakt.php" method="POST">
          Jméno <br>
          <input type="text" name="name" value="" required> <br>
          Tel. číslo / E-mail <br>
          <input type="text" name="contact" value="" required> <br>
          Zpráva <br>
          <textarea name="message" rows="10" cols="80" required></textarea>
          <button id="submit_btn" type="submit" name="submit">Odeslat</button>
        </form>

        <p id="message_confirmation">Zpráva byla odeslána.</p>
      </div>

      <?php 

      if(isset($_POST['submit'])) {

        $name = $_POST["name"];
        $contact = $_POST["contact"];
        $message = $_POST["message"];

        $my_email = "postmaster@zenichanevesta.cz";
        $subject = "ZaN - Zprava";
        $email_body = "Od: ".$name." \r\n Kontakt: ".$contact." \r\n \r\n ".$message."";

        mail($my_email, $subject, $email_body);
        //echo '<script>console.log("' .$email_body. '")</script>';

      }
          
      ?>

      <hr>

      <div class="location_container">
        <h2 class="contact_h2">Najdete nás na:</h2>

        <iframe src="https://web-1044.webnode.cn/widgets/googlemaps/?z=15&a=Smetanovo+n%C3%A1b%C5%99.
        +1224%2F17%2C+690+28+B%C5%99eclav&s=LcwxCsAgDEbhu2QuQlfP0U0cHH6LkGpJ0kHEu9dC5-_xwqCMZI_g6DfIk
        0mqWsxxqaCNwLhQ7ccT7YJJd7kwL1XrDFHyYZB-l2Sl1RXuNOOMLw.." width="" height=""></iframe>
      </div>
    </section>

    <!-- FOOTER -->

    <?php include './includes/footer.php'; ?>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="./script/jquery.cookie.js"></script>
    <script src='./script/main_script.js'></script>
    <script src='./script/contact.js'></script>


  </body>
</html>