<?php
/* Smarty version 4.1.0, created on 2022-03-29 01:09:35
  from 'D:\xampp\htdocs\php_04_szablonowanie_smarty\app\calc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6242402f0093d3_60379405',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3ded8229b2980d9c3006b5f4144f0f8f15b2ae85' => 
    array (
      0 => 'D:\\xampp\\htdocs\\php_04_szablonowanie_smarty\\app\\calc.tpl',
      1 => 1648508757,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6242402f0093d3_60379405 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_18370118766242402eed7691_71513578', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19696009846242402eed8352_78163834', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_18370118766242402eed7691_71513578 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_18370118766242402eed7691_71513578',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<footer  style="text-align:center"; "background:#181015">przykładowa tresć stopki wpisana do szablonu głównego z szablonu kalkulatora</footer><?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_19696009846242402eed8352_78163834 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_19696009846242402eed8352_78163834',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div id= head>
<h3  style="font-size:5em" >Kalkulator zysku z lokaty</h2>


<form action="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/calc.php" method="post">
	<fieldset>
		<label for="x">Podaj kwotę złożoną na lokatę:</label>
		<input id="x" type="text" placeholder="wartość x" name="x" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['x'];?>
">
		<label for="y">Podaj roczne oprocentowanie lokaty:</label>
		<input id="y" type="text" placeholder="wartość y" name="y" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['y'];?>
">
                                     <label for="z">Podaj czas trwania lokaty w dniach:</label>
		<input id="z" type="text" placeholder="wartość z" name="z" value="<?php echo $_smarty_tpl->tpl_vars['form']->value['z'];?>
">
	</fieldset>
	<button type="submit" class="btn-action">Oblicz</button>
</form>

<div class="messages">

<?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['messages']->value) > 0) {?> 
		<h4>Wystąpiły błędy: </h4>
		<ol class="err">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['infos']->value))) {?>
	<?php if (count($_smarty_tpl->tpl_vars['infos']->value) > 0) {?> 
		<h4>Informacje: </h4>
		<ol class="inf">
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'msg');
$_smarty_tpl->tpl_vars['msg']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['msg']->value) {
$_smarty_tpl->tpl_vars['msg']->do_else = false;
?>
		<li><?php echo $_smarty_tpl->tpl_vars['msg']->value;?>
</li>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
		</ol>
	<?php }
}?>

<?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
	<h4>Wynik</h4>
	<p class="res">
	<?php echo $_smarty_tpl->tpl_vars['result']->value;?>

	</p>
<?php }?>

</div>

<?php
}
}
/* {/block 'content'} */
}
