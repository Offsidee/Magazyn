<?php
/* Smarty version 4.1.0, created on 2022-05-31 08:49:05
  from 'C:\xampp\htdocs\projekt\app\views\Login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6295ba61edaa72_21125461',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cd8b30d5757383646539f189da81136898848835' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\Login.tpl',
      1 => 1653979744,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6295ba61edaa72_21125461 (Smarty_Internal_Template $_smarty_tpl) {
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
  background-image: url("https://www.provafacilnaweb.com.br/wp-content/uploads/2020/08/migra%C3%A7%C3%A3o-digital.png);
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
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="w3-button w3-block w3-black">ZALOGUJ</a>
    </div>
  </div>
</div>




  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Uniwersytet Śląski,2022</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">


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
