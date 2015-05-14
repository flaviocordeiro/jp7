<?php /* Smarty version 3.1.23, created on 2015-05-13 18:13:53
         compiled from "view/area.html" */ ?>
<?php
/*%%SmartyHeaderCode:1885616958555394619ff922_09660488%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35d4fdc87859be1ea1a4565060dfe81e139041bc' => 
    array (
      0 => 'view/area.html',
      1 => 1431540817,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1885616958555394619ff922_09660488',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_55539461aeefd2_17094224',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55539461aeefd2_17094224')) {
function content_55539461aeefd2_17094224 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1885616958555394619ff922_09660488';
echo $_smarty_tpl->getSubTemplate ("view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>


<form method="POST">
    Nome da Área: <input name="area" type="text" /><br />
    <input type="submit" value="Cadastrar" />
</form>

<hr/>
<table>
    <tr>
        <td>Nome da área</td>
        <td>Ações</td>
    </tr>
    <?php
$_from = $_smarty_tpl->tpl_vars['lista']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['row'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['row']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['row']->value) {
$_smarty_tpl->tpl_vars['row']->_loop = true;
$foreachItemSav = $_smarty_tpl->tpl_vars['row'];
?>
    <tr>
        <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_area'];?>
</td>
        <td> Edit | <a href="?del=<?php echo $_smarty_tpl->tpl_vars['row']->value['cod_area'];?>
">Delete</a> </td>
    </tr>
    <?php
$_smarty_tpl->tpl_vars['row'] = $foreachItemSav;
}
?>
</table>

<?php echo $_smarty_tpl->getSubTemplate ("view/footer.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

        
<?php }
}
?>