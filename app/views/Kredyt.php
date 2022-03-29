<html>
<head>
<meta charset="utf-8" />
<title>Kredyt</title>

 <link rel="stylesheet" type="text/css" href="<?php print($conf->app_url);?>/css/style.css" />
 
</head>

<body>
  <div id="wrapper">
    <div id="logo">
    <img src="<?php print($conf->app_url);?>/images/logo.png" />
    </div>
    <div id="menu">
        <ul>
			<li><a href="#" class="active">Strona główna</a></li>
			<li><a href="<?php print($conf->app_url); ?>/security/logout.php"><?php echo "Jesteś zalogowany jako: <u>".$role."</u>"; ?><br></a></li>
        </ul>
    </div>
    <div id="header">
		<img src="<?php print($conf->app_url);?>/images/bg_head.jpg" style="float: right" />
    <div id="title_head">    
	<h2>SEO - Super Extra Oferty!</h2>
    <h3>Kredyt - Kalkulator</h3>
    <form action="<?php $conf->action_root ?>Kredyt" method="post">
	
        <label>Kwota:</label>
        <input type="Number" id="kwota" name="kwo" value="" min="1" placeholder="1-ile chcesz"></input><br>
		
        <label>Lata:</label>
        <input type="Number" id="rok" name="lat" value="" min="1" max="30" placeholder="1-30"></input><br>
		
        <label>Procenty:</label>
        <input type="Number" id="procent" name="pro" value="" min="0" max="100" placeholder="0-100"></input>%<br>
		
        <input type="submit" value="Oblicz"></input>
		
    </form>
    </div>    
    </div>
    <div id="solid">
    <h2><p style="text-align:center;font-size:20px;"><b>Opis:</b></p></h2>
<p style="margin-left:15px;">Jesli masz jakis problem pisz do supportu pod adresem kredyt24hnadobe@gmail.com lub dzwon do nas pod numer 505 213 777. Za wszelkie problemy i niedogodności przepraszamy.</p>
<ol> <b> USER </b>
    <li>Limit kwoty: 1-ile chcesz</li>
    <li>Limit lat: 1-30</li>
    <li>Limit Procent: 0-100%</li>
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
