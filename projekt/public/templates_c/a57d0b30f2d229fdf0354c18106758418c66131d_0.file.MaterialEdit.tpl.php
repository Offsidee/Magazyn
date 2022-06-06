<?php
/* Smarty version 4.1.0, created on 2022-06-04 12:49:42
  from 'D:\xampp\htdocs\projekt\app\views\templates\MaterialEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629b38c632c461_37859642',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a57d0b30f2d229fdf0354c18106758418c66131d' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\templates\\MaterialEdit.tpl',
      1 => 1654339771,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629b38c632c461_37859642 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>
<head>
<title>Projekt</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
  height: 100%;
  font-family: "Inconsolata", sans-serif;
}

.bgimg {
  background-position: center;
  background-size: cover;
  background-image: url("https://www.provafacilnaweb.com.br/wp-content/uploads/2020/08/migra%C3%A7%C3%A3o-digital.png");
  min-height: 100%;
}

.menu {
  display: none;
}
</style>
</head>
<body>

<!-- Links (sit on top) -->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col s3">
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
mainpage" class="w3-button w3-block w3-black">START</a>
    </div>
    <div class="w3-col s3">
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
materialy" class="w3-button w3-block w3-black">MATERIAŁY</a>
    </div>
    <div class="w3-col s3">
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
producenci" class="w3-button w3-block w3-black">PRODUCENCI</a>
    </div>
    <div class="w3-col s3">
      <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
logout" class="w3-button w3-block w3-black">WYLOGUJ</a>
      <?php } else { ?>	
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="w3-button w3-block w3-black">ZALOGUJ</a>
      <?php }?>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">By Wałach Maciej</span>
  </div>
  <div class="w3-display-middle w3-center">

<div class="bottom-margin">
<form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
materialSave" method="post" class="pure-form pure-form-aligned">
	<fieldset>
		<legend>Dane materiału:</legend>
		<div class="pure-control-group">
            <label for="nazwa">nazwa</label>
            <input id="nazwa" type="text" placeholder="nazwa" name="nazwa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwa;?>
">
        </div>
		<div class="pure-control-group">
            <label for="typ">typ</label>
            <input id="typ" type="text" placeholder="typ" name="typ" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->typ;?>
">
        </div>
		<div class="pure-control-group">
            <label for="ilosc">ilosc</label>
            <input id="ilosc" type="text" placeholder="ilosc" name="ilosc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ilosc;?>
">
        </div>
        <div class="pure-control-group">
            <label for="dlugosc">dlugosc</label>
            <input id="dlugosc" type="text" placeholder="dlugosc" name="dlugosc" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->dlugosc;?>
">
        </div>
		<div class="pure-controls">
			<input type="submit" class="pure-button pure-button-primary" value="Zapisz"/>
			<a class="pure-button button-secondary" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
materialy">Powrót</a>
		</div>
	</fieldset>
    <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
</form>	
</div>












  
   
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Uniwersytet Śląski,2022</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">















  </div>
</div>

<!-- End page content -->
</div>



<?php echo '<script'; ?>
>
// Tabbed Menu
function openMenu(evt, menuName) {
  var i, x, tablinks;
  x = document.getElementsByClassName("menu");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < x.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
  }
  document.getElementById(menuName).style.display = "block";
  evt.currentTarget.firstElementChild.className += " w3-dark-grey";
}
document.getElementById("myLink").click();
<?php echo '</script'; ?>
>

</body>
</html>
<?php }
}
