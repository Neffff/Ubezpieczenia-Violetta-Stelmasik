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
    
    }
    }
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt | Ubezpieczenia Violetta Stelmasik</title>
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
                    <li><a href="index.php">Strona Główna</a></li>
                    <li><a href="oferta">Oferta</a></li>
                    <li><a href="o-mnie">O mnie</a></li>
                    <li class="active"><a href="kontakt">Kontakt</a></li>
                </ul>
            </div>
            <!--/.nav-collapse -->
        </div>
    </nav>

    <div class="container-fluid jumbotron-no-overlay contact-jumbo">
        <h2>Kontakt</h2>
    </div>


    <div class="container-fluid black-background">
        <div class="container contact-form">
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
    <script src="js/label-filled.js"></script>
</body>

</html>
