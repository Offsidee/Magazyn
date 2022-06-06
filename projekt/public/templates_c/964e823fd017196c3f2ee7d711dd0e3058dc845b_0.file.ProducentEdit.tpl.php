<?php
/* Smarty version 4.1.0, created on 2022-06-06 23:31:25
  from 'D:\xampp\htdocs\projekt\app\views\ProducentEdit.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_629e722d478f31_65369306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '964e823fd017196c3f2ee7d711dd0e3058dc845b' => 
    array (
      0 => 'D:\\xampp\\htdocs\\projekt\\app\\views\\ProducentEdit.tpl',
      1 => 1654551083,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_629e722d478f31_65369306 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html>

<head>
  <title>Projekt</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
  <style>
    body,
    html {
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
      <div class="w3-col  w3-rest">
      <?php if (count($_smarty_tpl->tpl_vars['conf']->value->roles) > 0) {?>
      <div class="w3-col  ">
      <a href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_url;?>
pracownicy" class="w3-button w3-block w3-black">PRACOWNICY</a>    
      </div> 
      </div>
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
      <h5 class="w3-center w3-padding-40"><span class="w3-tag w3-wide w3-round-large">EDYTUJ PRODUCENTA</span></h5>

      <div class="bottom-margin">
        <form action="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
producentSave" method="post" class="w3-container w3-text-white ">


          <div class="w3-input">
            <label for="nazwa">Nazwa</label>
            <input class="w3-input w3-black w3-border w3-round-large" id="nazwa" type="text" placeholder="nazwa"
              name="nazwa" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->nazwa;?>
">
          </div>
          <div class="w3-input"">
            <label for=" miasto">Miasto</label>
            <input class="w3-input w3-black w3-border w3-round-large" id="miasto" type="text" placeholder="miasto"
              name="miasto" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->miasto;?>
">
          </div>
          <div class="w3-input">
            <label for="ulica">Ulica</label>
            <input class="w3-input w3-black w3-border w3-round-large" id="ulica" type="text" placeholder="ulica"
              name="ulica" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->ulica;?>
">
          </div>
          <div class="w3-input">
            <label for="telefon">Telefon</label>
            <input class="w3-input w3-black w3-border w3-round-large" id="telefon" type="text" placeholder="telefon"
              name="telefon" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->telefon;?>
">
          </div>
          <div class="w3-input">
            <label for="mail">Mail</label>
            <input class="w3-input w3-black w3-border w3-round-large" id="mail" type="text" placeholder="mail"
              name="mail" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->mail;?>
">
          </div>
          <br />
          <div class=w3-margin-bottom>
            <input type="submit" class="w3-button w3-black w3-tiny w3-round-large" value="Zapisz" />
            <a class="w3-button w3-black w3-tiny w3-round-large" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->action_root;?>
producenci">Powrót</a>

          </div>

          <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['form']->value->id;?>
">
        </form>

        <?php if ($_smarty_tpl->tpl_vars['msgs']->value->isMessage()) {?>
        <div class="messages bottom-margin">
          <ul>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['msgs']->value->getMessages(), 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
            <li class=<?php if ($_smarty_tpl->tpl_vars['msg']->value->isError()) {?>error<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isWarning()) {?>warning<?php }?> <?php if ($_smarty_tpl->tpl_vars['msg']->value->isInfo()) {?>info<?php }?>"><?php echo $_smarty_tpl->tpl_vars['msg']->value->text;?>
</li>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
          </ul>
        </div>
        <?php }?>



  </header>

  <!-- Add a background color and large text to the whole page -->

  </div>

  <!-- End page content -->
  </div>
  <div class="w3-display-bottomright w3-center w3-padding-large">
    <span class="w3-text-white">Uniwersytet Śląski,2022</span>
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

</html><?php }
}
