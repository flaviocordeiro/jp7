<?php

require_once 'actions/aReceita.php';

class Receita extends aReceita {

    public function doUpload() {
        $arquivo = $this->getArquivo();
        $uploaddir = 'arquivos-upload/';
        $uploadfile = $uploaddir . basename($arquivo['name']);

        if ($arquivo['type'] == 'application/octet-stream'):
            if (move_uploaded_file($arquivo['tmp_name'], $uploadfile)):
                $ponteiro = fopen($uploaddir . $arquivo['name'], "r");
                $i = 0;
                while (!feof($ponteiro)):
                    $linha = fgets($ponteiro, 15000);
                    $parse = explode("\t", utf8_decode($linha));

                    if ($i == 0):
                        $i++;
                        continue;
                    endif;
//                    echo '<pre>';
//                        var_dump($parse);
//                    echo '</pre>';
                    
                    $this->setNomeCliente($parse[0]);
                    $this->setDescricao($parse[1]);
                    $this->setPreco($parse[2]);
                    $this->setQuantidade($parse[3]);
                    $this->setEnderecoLoja($parse[4]);
                    $this->setNomeLoja($parse[5]);
                    $this->setArquivo($uploaddir.$arquivo['name']);
                    $this->insert();

                endwhile;
//                exit;
                fclose($ponteiro);


            else:
            //ERRO
            endif;
        endif;
    }

}

?>
