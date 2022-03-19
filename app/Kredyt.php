<html>
<head>
<meta charset="utf-8" />
<title>Kredyt</title>

 <link rel="stylesheet" type="text/css" href="<?php print(_APP_URL);?>/app/css/style.css" />
 
</head>

<body>
  <div id="wrapper">
    <div id="logo">
    <img src="<?php print(_APP_URL);?>/app/images/logo.png" />
    </div>
    <div id="menu">
        <ul>
        <li><a href="#" class="active">Strona główna</a></li>
        <li><a href="<?php print(_APP_ROOT); ?>/app/security/logout.php"><?php echo "Jesteś zalogowany jako: <b>".$role."</b>"; ?><br></a></li>
        </ul>
    </div>
    <div id="header">
    <img src="<?php print(_APP_URL);?>/app/images/bg_head.jpg" style="float: right" />
    <div id="title_head">    
    <h2>WKT - Wspaniałe Kredyty u Thundera</h2>
    <h3>Kredyt - Kalkulator</h3>
    <form action="<?php print(_APP_URL);?>/app/Srodek.php" method="post">
        <label>Kwota:</label>
        <input type="Number" id="kwota" name="kwo" value="<?php echo $k; ?>" min="1" placeholder="1-ile chcesz"></input><br>
        <label>Lata:</label>
        <input type="Number" id="rok" name="lat" value="<?php echo $l; ?>" min="1" max="30" placeholder="1-30"></input><br>
        <label>Procenty:</label>
        <input type="Number" id="procent" name="pro" value="<?php echo $p; ?>" min="0" max="100" placeholder="0-100"></input>%<br>
        <input type="submit" value="Oblicz"></input>
    </form>
<?php
//Jeśli są błędy, wyświetl je
if(isset ($message)){
    foreach($message as $key => $msg){
    echo "<li>".$msg."</li>";
    }
}
//Jesli jest jakis podatek
if(isset ($suma) && isset ($wynik) && isset ($lata) && isset ($kwota)){
echo 'Do splacenia w sumie: '.$suma.' zl<br>';
echo 'Rata co miesiąc: '.$wynik.' zl przez: '.$lata.' miesiecy<br>'; 
echo 'Podatek: '.$kwota.' zl';
}
//Jesli nie ma podatku
if(isset($wynik) && isset($lata) && !isset($suma) && !isset($kwota)){
echo 'Do splacenia w sumie: '.$k.' zl<br>';   
echo 'Rata co miesiąc: '.$wynik.' zl przez: '.$lata.' miesiecy<br>';  
echo 'BRAK PODATKU';
}
?>

    </div>    
    </div>
    <div id="solid">
    <h2><p style="text-align:center;font-size:20px;"><b>Opis:</b></p></h2>
<p style="margin-left:15px;">Uzytkownik ma mniejsze uprawnienia od admina. Admin moze wykonywac obliczenia zwiazane z kredytem na wieksza skale. Uzytkownik natomiast ma pewne ograniczenia. Jesli masz jakis problem pisz do supportu pod adresem kredyt24hnadobe@gmail.com lub dzwon do nas pod numer 505 213 777. Za wszelkie problemy i niedogodności przepraszamy. Ponizej dane ktore moze wprowadzac uzytkownik a admin:</p>
<ol> <b> USER </b>
    <li>Limit kwoty: 1-10000</li>
    <li>Limit lat: 1-10</li>
    <li>Limit Procent: 0-50%</li>
</ol>
<ol> <b> ADMIN* </b>
    <li>Limit kwoty: 1-ile chcesz</li>
    <li>Limit lat: 1-30</li>
    <li>Limit Procent: 0-100%</li>
</ol><br>
</div>
    <div id="footer">
        <p>&copy Wszelkie prawa zastrzeżone. <br /> Projekt: <a href="http://www.templatki.net">Darmowe Szablony Stron</a></p>
    </div>
</body>
</html>
