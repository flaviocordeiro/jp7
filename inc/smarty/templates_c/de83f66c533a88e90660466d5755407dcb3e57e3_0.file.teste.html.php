<?php /* Smarty version 3.1.23, created on 2015-05-13 17:05:23
         compiled from "view/teste.html" */ ?>
<?php
/*%%SmartyHeaderCode:755774069555384534a5ba8_00979412%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'de83f66c533a88e90660466d5755407dcb3e57e3' => 
    array (
      0 => 'view/teste.html',
      1 => 1431536417,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '755774069555384534a5ba8_00979412',
  'variables' => 
  array (
    'data' => 0,
    'nome' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_5553845356f1a0_89998132',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_5553845356f1a0_89998132')) {
function content_5553845356f1a0_89998132 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '755774069555384534a5ba8_00979412';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>OLÁ HOJE É <?php echo $_smarty_tpl->tpl_vars['data']->value;?>
</title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <div><?php echo $_smarty_tpl->tpl_vars['nome']->value;?>
, é você!</div>
    </body>
</html>
<?php }
}
?>