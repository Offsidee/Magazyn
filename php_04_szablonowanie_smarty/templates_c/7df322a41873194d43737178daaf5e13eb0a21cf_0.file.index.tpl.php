<?php
/* Smarty version 4.1.0, created on 2022-03-28 23:22:37
  from 'D:\xampp\htdocs\PAW\calculator\app\index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6242271dc56792_80292851',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7df322a41873194d43737178daaf5e13eb0a21cf' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PAW\\calculator\\app\\index.tpl',
      1 => 1647913872,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6242271dc56792_80292851 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3967265496242271dbb6a39_25991866', 'footer');
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5931845426242271dbb7640_26899547', 'content');
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "../templates/main.tpl");
}
/* {block 'footer'} */
class Block_3967265496242271dbb6a39_25991866 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_3967265496242271dbb6a39_25991866',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
Copyright &copy 2022, gCode dev. All rights reserved.<?php
}
}
/* {/block 'footer'} */
/* {block 'content'} */
class Block_5931845426242271dbb7640_26899547 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_5931845426242271dbb7640_26899547',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        
        <form action="index.php" method="post">
            <h2><?php echo $_smarty_tpl->tpl_vars['p_title']->value;?>
</h2>
            <span>kursy z dnia <?php echo $_smarty_tpl->tpl_vars['date']->value;?>
 via NBP</span>
            <input type="text" name="firstValue" placeholder="Ilość wybranej waluty" required>
            <select name="fCurrency" class="currency">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencyMap']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
               <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value->code;
$_prefixVariable1 = ob_get_clean();
echo $_prefixVariable1;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->currency;?>
</option>;
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <label for="sCurrency">Konwertuj na: </label>
            <select name="sCurrency" class="currency destCurrency">
               <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencyMap']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
               <option value="<?php ob_start();
echo $_smarty_tpl->tpl_vars['v']->value->code;
$_prefixVariable2 = ob_get_clean();
echo $_prefixVariable2;?>
"><?php echo $_smarty_tpl->tpl_vars['v']->value->currency;?>
</option>;
               <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </select>
            <input type="submit" value="Przelicz!" name="submitted">
        </form>
    <div>
        
            <?php if ((isset($_smarty_tpl->tpl_vars['result']->value))) {?>
            <?php echo $_smarty_tpl->tpl_vars['result']->value;?>

            <?php }?>
        
    </div>
    <div class="errorContainer">
        <?php if ((isset($_smarty_tpl->tpl_vars['messages']->value))) {?>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['messages']->value, 'message');
$_smarty_tpl->tpl_vars['message']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->do_else = false;
?>
                <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
        <?php }?>
    </div>
<?php
}
}
/* {/block 'content'} */
}
