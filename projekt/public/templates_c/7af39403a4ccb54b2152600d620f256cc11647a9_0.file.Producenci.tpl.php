<?php
/* Smarty version 4.1.0, created on 2022-05-31 08:12:59
  from 'C:\xampp\htdocs\projekt\app\views\Producenci.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6295b1ebc8c0d3_23617265',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7af39403a4ccb54b2152600d620f256cc11647a9' => 
    array (
      0 => 'C:\\xampp\\htdocs\\projekt\\app\\views\\Producenci.tpl',
      1 => 1653909188,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6295b1ebc8c0d3_23617265 (Smarty_Internal_Template $_smarty_tpl) {
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
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
login" class="w3-button w3-block w3-black">ZALOGUJ</a>
    </div>
  </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
  <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
    <span class="w3-tag">By Wałach Maciej</span>
  </div>
  <div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:90px">PRODUCENCI</span>
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Uniwersytet Śląski,2022</span>
  </div>
</header>

<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">





    

<!-- Contact/Area Container -->
<div class="w3-container" id="where" style="padding-bottom:32px;">
  <div class="w3-content" style="max-width:700px">
    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">NAGŁÓWEK</span></h5>
    <p>Lista producentów</p>
    
    <p><span class="w3-tag">LOREM!</span> Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam eaque ipsa, quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt, explicabo.</p>
    <form action="/action_page.php" target="_blank">
      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Szukaj"  name="Szukaj"></p>
      <p><button class="w3-button w3-black" type="submit">Wyszukaj</button></p>

      <p><input class="w3-input w3-padding-16 w3-border" type="text" placeholder="Dodaj"  name="Dodaj"></p>
      <p><button class="w3-button w3-black" type="submit">Dodaj</button></p>
    </form>
  </div>
</div>

<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

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
