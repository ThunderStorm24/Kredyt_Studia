<?php
/* Smarty version 3.1.30, created on 2022-04-04 20:45:25
  from "C:\xampp\htdocs\Zadanie1_P\app\views\Kredyt.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_624b3cc5b97d92_85305711',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7c24a680a33e91fc6ebf6c95676a8e802167882d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie1_P\\app\\views\\Kredyt.html',
      1 => 1649097924,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624b3cc5b97d92_85305711 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
<head>
<meta charset="utf-8" />
<title>Kredyt</title>

 <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/style.css" />
 
</head>

<body>
  <div id="wrapper">
    <div id="logo">
    <img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/logo.png" />
    </div>
    <div id="menu">
        <ul>
			<li><a href="#" class="active">Strona główna</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
logout">Jesteś zalogowany!!! <u>[Wylogować?]</u><br></a></li>
        </ul>
    </div>
    <div id="header">
		<img src="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/images/bg_head.jpg" style="float: right" />
    <div id="title_head">    
	<h2>SEO - Super Extra Oferty!</h2>
    <h3>Kredyt - Kalkulator</h3>
    <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
Kredyt" method="post">
	
        <label>Kwota:</label>
        <input type="Number" id="kwota" name="kwo" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->k;?>
" min="100" max="100000" placeholder="100-100k"></input><br>
		
        <label>Lata:</label>
        <input type="Number" id="rok" name="lat" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->l;?>
" min="1" max="30" placeholder="1-30"></input><br>
		
        <label>Procenty:</label>
        <input type="Number" id="procent" name="pro" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->p;?>
" min="0" max="100" placeholder="0-100"></input>%<br>
		
        <input type="submit" value="Oblicz"></input>
		
    </form>
	

    </div>   

    <p style="margin-left:10px">
        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isError()) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getErrors(), 'err');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['err']->value) {
?>
	            <font color='red'><?php echo $_smarty_tpl->tpl_vars['err']->value;?>
<br></font>
	        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['form']->value->suma) && isset($_smarty_tpl->tpl_vars['form']->value->wynik) && isset($_smarty_tpl->tpl_vars['form']->value->lata) && isset($_smarty_tpl->tpl_vars['form']->value->kwota) && ($_smarty_tpl->tpl_vars['msgs']->value->isEmpty())) {?>
            Do splacenia w sumie: <b><?php echo $_smarty_tpl->tpl_vars['form']->value->suma;?>
 zl</b><br>
            Rata co miesiąc: <b><?php echo $_smarty_tpl->tpl_vars['form']->value->wynik;?>
 zl</b> przez: <b><?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
 miesiecy</b><br> 
            Podatek: <b><?php echo $_smarty_tpl->tpl_vars['form']->value->kwota;?>
 zl</b>
        <?php }?>

        <?php if (isset($_smarty_tpl->tpl_vars['form']->value->wynik) && isset($_smarty_tpl->tpl_vars['form']->value->lata) && !isset($_smarty_tpl->tpl_vars['form']->value->suma) && !isset($_smarty_tpl->tpl_vars['form']->value->kwota) && ($_smarty_tpl->tpl_vars['msgs']->value->isEmpty())) {?>
            Do splacenia w sumie: <b><?php echo $_smarty_tpl->tpl_vars['form']->value->k;?>
 zl</b><br>
            Rata co miesiąc: <b><?php echo $_smarty_tpl->tpl_vars['form']->value->wynik;?>
 zl</b> przez: <b><?php echo $_smarty_tpl->tpl_vars['form']->value->lata;?>
 miesiecy</b><br>  
            <b>BRAK PODATKU</b>
        <?php }?>
    </p>

    </div>
    <div id="solid">
    <h2><p style="text-align:center;font-size:20px;"><b>Opis:</b></p></h2>
<p style="margin-left:15px;">Jesli masz jakis problem pisz do supportu pod adresem kredyt24hnadobe@gmail.com lub dzwon do nas pod numer 505 213 777. Za wszelkie problemy i niedogodności przepraszamy.</p>
<ol> <b> USER </b>
    <li>Limit kwoty: 100-100000</li>
    <li>Limit lat: 1-30</li>
    <li>Limit Procent: 0-100%</li>
</ol>
<ol> <b> ADMIN* </b>
    <li>Limit kwoty: 100-100000 chcesz</li>
    <li>Limit lat: 1-30</li>
    <li>Limit Procent: 0-100%</li>
</ol><br>
</div>
    <div id="footer">
        <p>&copy Wszelkie prawa zastrzeżone. <br /> Projekt: <a href="http://www.templatki.net">Darmowe Szablony Stron</a></p>
    </div>
</body>
</html>
<?php }
}
