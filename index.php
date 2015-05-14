<?php
require_once 'sm.php';
require_once 'core/Receita.php';

$receita = new Receita();

if(isset($_POST['processarArquivo'])):
    $receita->setArquivo($_FILES['arquivo']);
    $receita->doUpload();
endif;


$sm->assign("lista", $receita->select());



$sm->display("receita.html");

?>
