<?php
/* Smarty version 3.1.30, created on 2022-03-31 17:39:05
  from "C:\xampp\htdocs\Zadanie1_P\app\views\Logowanie.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_6245cb197f1766_73884197',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a833eb04b6c73427455019978f2eba5e3fb8a262' => 
    array (
      0 => 'C:\\xampp\\htdocs\\Zadanie1_P\\app\\views\\Logowanie.html',
      1 => 1648741144,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6245cb197f1766_73884197 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<head>
<meta charset="utf-8" />
<title>Logowanie</title>
<meta name="Description" content="Opis strony w tym miejscu. Pojawi się w wynikach Google."/>
<meta name="Keywords" content="słowa kluczowe opisujące Twoją stronę">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url;?>
/css/stylelogin.css" />
</head>

<body>
   <div id="wrapper">
   
		 <div id="content">
		 
            <div id="main">
			
			<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" method="post">
				<h1>Logowanie</h1><br>
					<b>login:</b><br>
					<input type="text" name="login" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->login;?>
" /><br><br>
			
					<b>password:</b><br>
					<input type="password" name="password" /><br><br>

					<input type="submit" value="Zaloguj"/>
			</form>

				<div id="bledy">

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

				</div>

            </div>
			
		 </div>
		 
		 <div id="copyright">
			&copy; Wszelkie prawa zastrzeżone. <br/> 
            Projekt: <a href="http://www.templatki.net">Darmowe Szablony Stron</a>			    
	     </div>

   </div>
   
</body>
</html>
<?php }
}
