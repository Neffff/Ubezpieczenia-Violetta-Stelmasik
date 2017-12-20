<?php 
if(isset($_POST['submit'])){
    $to = "viletta@op.pl"; // this is your Email address
    $from = $_POST['email']; // this is the sender's Email address
    $first_name = $_POST['first_name'];
    $subject = $_POST['subject'];
    $subject2 = "Kopia Twojej wiadomości ze strony ubezpieczeniastelmasik.pl";
    $message = $first_name . " " . $last_name . " napisał(a):" . "\n\n" . $_POST['message'];
    $message2 = "Treść Twojej wiadomości " . $first_name . "\n\n" . $_POST['message'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    
    if (!$_POST['first_name']) {
	$errName = 'Proszę wpisać swoje Imię i Nazwisko';
}
        if (!$_POST['first_name']) {
	$errNameError = 'has-error';
}
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
	$errEmail = 'Proszę wpisać swój adres E-mail';
}
            if (!$_POST['email']) {
	$errEmailError = 'has-error';
}
    if (!$_POST['subject']) {
	$errSubject = 'Proszę wpisać temat';
}   
            if (!$_POST['subject']) {
	$errSubjectError = 'has-error';
}
    if (!$_POST['message']) {
	$errMessage = 'Proszę wpisać wiadomość';
}
            if (!$_POST['message']) {
	$errMessageError = 'has-error';
}
    if (!$errName && !$errEmail && !$errSubject && !$errMessage) {
	if (mail($to,$subject,$message,$headers) &&
    mail($from,$subject2,$message2,$headers2)) {
		$result='<div class="alert alert-success">Dziękujemy za wiadomość, odpowiemy tak szybko jak to możliwe!</div>';
	} else {
		$result='<div class="alert alert-danger">Przepraszamy, wystąpił błąd podczas wysyłania wiadomości. Spróbuj jeszcze raz.</div>';
	}
    header('Location: index.php#form');
    }
    }
?>


<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Firma Ubezpieczenia Violetta Stelmasik oferuje ubezpieczenia majątkowe, osobowe i komunikacyjne - OC, AC, NNW, polisy na życie, ubezpieczenia emerytalne, ubezpieczenia turystyczne oraz rolne. Korzystne ubezpieczenia na terenie Wielkopolski!"/>
    <title>Ubezpieczenia Violetta Stelmasik - Ślesin, Lubomyśle, Konin</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet">
    <link rel="Stylesheet" type="text/css" href="css/style.css">
    <script src="js/map.js"></script>
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDteztXWhybXBI-POUIdLkaY5FYu1pXSw&callback=initMap"></script>
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
</head>

<body>
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
                <a class="navbar-brand" href="index.php"><span>Ubezpieczenia</span><br> Violetta Stelmasik</a>
            </div>
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">Strona Główna</a></li>
                    <li><a href="oferta">Oferta</a></li>
                    <li><a href="o-mnie">O mnie</a></li>
                    <li><a href="kontakt">Kontakt</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container-fluid jumbotron">
        <h2><span>Wyszukam dla Ciebie najkorzystniejszą ofertę</span> spośród kilkunastu ubezpieczycieli w całej Polsce!</h2>
        <a class="btn btn-default custom-btn" href="kontakt.php" role="button">Umów spotkanie</a>
    </div>

    <div class="jumbotron-overlay"></div>
        <div class="container-fluid carousel">
        <div class="owl-carousel owl-theme">
            <div class="item"><img src="img/firmy/pzu_logo_rgb.jpg" alt="pzu"></div>
            <div class="item"><img src="img/firmy/warta_logo_podstawowy_cmyk.jpg" alt="warta"></div>
            <div class="item"><img src="img/firmy/generali-logo-big.svg" alt="generali"></div>
            <div class="item"><img src="img/firmy/ergo-hestia.jpg" alt="ergo hestia"></div>
            <div class="item"><img src="img/firmy/MTU.jpg" alt="MTU"></div>
            <div class="item"><img src="img/firmy/logo-proama-rgb.jpg" alt="proama"></div>
            <div class="item"><img src="img/firmy/uniqa_www_300.png" alt="uniqa"></div>
            <div class="item"><img src="img/firmy/balcia-logo-nowy-sacz.jpg" alt="balcia"></div>
            <div class="item"><img src="img/firmy/gothaer-szczecin.png" alt="gothaer"></div>
            <div class="item"><img src="img/firmy/allianz-logo.jpg" alt="allianz"></div>
            <div class="item"><img src="img/firmy/Compensa-logo.jpg" alt="Compensa"></div>
            <div class="item"><img src="img/firmy/inter-risk.jpg" alt="inter risk"></div>
            <div class="item"><img src="img/firmy/tuw.%20JPG.JPG" alt="TUW"></div>
            <div class="item"><img src="img/firmy/ubezpieczenia-aviva.jpg" alt="aviva"></div>
            <div class="item"><img src="img/firmy/axa_fb.png" alt="axa"></div>
        </div>
    </div>
    <div class="container icons">
        <h2>Oferuję doradztwo ubezpieczeniowe:</h2>
        <p>ubezpieczenia domów i mieszkań</p>
        <p>ubezpieczenia majątkowe</p>
        <p>wyjazdowe i samochodowe</p>
        <p>na życie, zdrowotne</p>
        <div class="row">
            <div class="col-md-2 col-sm-4 col-xs-12">
               <a href="ubezpieczenia-komunikacyjne">
                <img src="img/ubezpieczenie-auta.svg" alt="ubezpieczenie auta">
                <p>Ubezpieczenia komunikacyjne</p></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
               <a href="ubezpieczenia-majatkowe">
                <img src="img/ubezpieczenie-domu2.svg" alt="ubezpieczenie domu">
                <p>Ubezpieczenia majątkowe</p></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
               <a href="ubezpieczenia-zycie">
                <img class="icon-img" src="img/ubezpieczenie-zycia.svg" alt="ubezpieczenie życia">
                <p>Ubezpieczenia na życie</p></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
               <a href="ubezpieczenia-firm">
                <img src="img/ubezpieczenie-firmy2.svg" alt="ubezpieczenie firmy">
                <p>Ubezpieczenia dla firm</p></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
               <a href="ubezpieczenia-rolne">
                <img src="img/ubezpieczenie-rolne.svg" alt="ubezpieczenie rolne">
                <p>Ubezpieczenia rolne</p></a>
            </div>
            <div class="col-md-2 col-sm-4 col-xs-12">
               <a href="ubezpieczenia-turystyczne">
                <img src="img/ubezpieczenie-turystyczne.svg" alt="ubezpieczenie turystyczne">
                <p>Ubezpieczena turystyczne</p></a>
            </div>
        </div>
    </div>

    <div class="container-fluid how-we-works">
        <div class="container">
            <h2>Łatwo i szybko skontaktuj się ze mną i ubezpiecz się!</h2>
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <span>1</span>
                    <h3>Podaj szczegóły</h3>
                    <p>Skontaktuj się ze mną mailowo lub telefonicznie aby podać szczegóły ubezpieczenia.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <span>2</span>
                    <h3>Odezwę się do Ciebie</h3>
                    <p>Odezwę się do Ciebie z przygotowaną propozycją.</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <span>3</span>
                    <h3>Uzyskaj ubezpieczenie</h3>
                    <p>Zobacz co oferuję i jeśli chcesz - skorzystaj z ubezpieczenia!</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid black-background">
        <div class="container contact-form" id="form">
            <h2>Skontaktuj się ze mną!</h2>
            <form id="myform" action="" method="post">
                <?php echo $result; ?>
                <div class="form-group <?php echo " $errNameError ";?>">
                    <input type="text" class="form-control" name="first_name" value="<?php echo htmlspecialchars($_POST['first_name']); ?>">
                    <label for="exampleInputEmail1">Twoje imię i nazwisko</label>
                </div>
                <div class="form-group <?php echo " $errEmailError ";?>">
                    <input type="email" class="form-control" id="exampleInputEmail1" name="email" value="<?php echo htmlspecialchars($_POST['email']); ?>">
                    <label for="exampleInputEmail1">Twój adres E-mail</label>
                </div>
                <div class="form-group <?php echo " $errSubjectError ";?>">
                    <input type="text" class="form-control" name="subject" value="<?php echo htmlspecialchars($_POST['subject']); ?>">
                    <label for="exampleInputEmail1">Temat e-maila</label>
                </div>
                <div class="form-group <?php echo " $errMessageError ";?>">
                    <textarea class="form-control" rows="5" name="message" id="textarea1"><?php echo htmlspecialchars($_POST['message']); ?></textarea>
                    <label for="textarea1">Treść wiadomości</label>
                </div>
                <p class='text-danger'></p> <button type="submit" name="submit" class="btn btn-default custom-btn">Wyślij wiadomość!</button>
            </form>
        </div>
        <div class="container info">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="img/e-mail.svg" alt="adres email">
                    <p>biuro@ubezpieczeniastelmasik.pl</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img src="img/lokalizacja.svg" alt="lokalizacja">
                    <p>Lubomyśle 52</p>
                    <p>62-561, Ślesin</p>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12">
                    <img class="icon-img" src="img/numer-telefonu.svg" alt="numer telefonu">
                    <p>+48 576-053-765</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-full">
        <div id="map"></div>
    </div>
    <footer class="container">
        <p>Ubezpieczenia Violetta Stelmasik © 2017 All rights reserved. Projekt i wykonanie: niemiec.say@gmail.com</p>
    </footer>
    <script src="js/main.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/label-filled.js"></script>
</body>

</html>
