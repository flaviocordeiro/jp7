<?php /* Smarty version 3.1.23, created on 2015-05-14 02:38:09
         compiled from "view/receita.html" */ ?>
<?php
/*%%SmartyHeaderCode:87012667455540a91880ae2_25953479%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3629c170019962457dbbda5e669936ef25b0f94' => 
    array (
      0 => 'view/receita.html',
      1 => 1431571088,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87012667455540a91880ae2_25953479',
  'variables' => 
  array (
    'lista' => 0,
    'row' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.23',
  'unifunc' => 'content_55540a919a3dc8_26570730',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55540a919a3dc8_26570730')) {
function content_55540a919a3dc8_26570730 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '87012667455540a91880ae2_25953479';
echo $_smarty_tpl->getSubTemplate ("view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<div class="container">
    <h1>Seja bem vindo!</h1>
    <p>Atenção a primeira linha do arquivo se destina ao cabeçalho pré-estabelecido.</p>
    <p>Por favor, submeta o seu arquivo para que possamos processá-lo:</p>
    <!-- AQUI VAI O FORMULARIO -->
    <form method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="exampleInputFile">Arquivo:</label>
            <input type="file" name="arquivo" id="exampleInputFile" />
            <input type="hidden" name="processarArquivo" value="1" />
        </div>
        <input type="submit" value="Processar" class="btn btn-default" />
    </form>
</div>
</div>

<div class="container">
    <table class="table table-resposive">
        <thead>
            <tr>
                <th>Cliente:</th>
                <th>Descrição:</th>
                <th>Preço:</th>
                <th>Quantidade:</th>
                <th>Endereço Loja:</th>
                <th>Nome da Loja:</th>
                <th>Receita Bruta:</th>
            </tr>
        </thead>
        <tbody>
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
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_cliente'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['descricao'];?>
</td>
                    <td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['row']->value['preco'],2,",",".");?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['quantidade'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['endereco_loja'];?>
</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['row']->value['nome_loja'];?>
</td>
                    <td>R$ <?php echo number_format($_smarty_tpl->tpl_vars['row']->value['receitaBruta'],2,",",".");?>
 </td>
                    
                </tr>
            <?php
$_smarty_tpl->tpl_vars['row'] = $foreachItemSav;
}
?>
        </tbody>
    </table>
    <hr>

    <footer>
        <p>&copy; 2015. Flávio Cordeiro.</p>
    </footer>
</div> <!-- /container -->

<?php echo $_smarty_tpl->getSubTemplate ("view/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0);
?>

<?php }
}
?>