<?php
/* Smarty version 4.1.0, created on 2022-03-29 00:38:54
  from 'D:\xampp\htdocs\PAW\calculator\templates\main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_624238fe1fcda0_66116355',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a5bd7e8270feeddce2db6e6c23645401b30e1a7a' => 
    array (
      0 => 'D:\\xampp\\htdocs\\PAW\\calculator\\templates\\main.tpl',
      1 => 1648507090,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_624238fe1fcda0_66116355 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo (($tmp = $_smarty_tpl->tpl_vars['p_desc']->value ?? null)===null||$tmp==='' ? "Default description" ?? null : $tmp);?>
">


    <link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/main.css">
<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['app_url']->value;?>
/app/bootstrap-theme.css">


    <title><?php echo (($tmp = $_smarty_tpl->tpl_vars['p_title']->value ?? null)===null||$tmp==='' ? "Default title!" ?? null : $tmp);?>
</title>
</head>
<body>
   
    <div class="formContainer">
    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_757920247624238fe1fbd42_23759583', 'content');
?>

    </div>
    <div class="footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1013454080624238fe1fc6b3_42088832', 'footer');
?>

    </div>
</body>

</html><?php }
/* {block 'content'} */
class Block_757920247624238fe1fbd42_23759583 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_757920247624238fe1fbd42_23759583',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
No content loaded<?php
}
}
/* {/block 'content'} */
/* {block 'footer'} */
class Block_1013454080624238fe1fc6b3_42088832 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'footer' => 
  array (
    0 => 'Block_1013454080624238fe1fc6b3_42088832',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
 No footer loaded! <?php
}
}
/* {/block 'footer'} */
}
