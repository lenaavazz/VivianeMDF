<?php
    //criei o control do produto. Helena
    include '../model/modelProduto.php';
    $acao = $_GET["acao"];
    switch ($acao) {
        case 'cad':
            $obj = new controllerProduto();
            $obj->cadastrar();
            break;
        default:
            # code...
            break;
    }
    class controllerProduto{
        function cadastrar(){
  
            $descricao = $_POST["n_descricao"];
            $quantidade = $_POST["n_quantidade"];
            $valor = $_POST["n_valor"];
            $fornecedor = $_POST["n_altura"];
            $fornecedor = $_POST["n_largura"];
            $fornecedor = $_POST["n_profundidade"];

            $produto = new Produto();

            $produto->setDescricao($descricao);
            $produto->setQuantidade($quantidade);
            $produto->setValor($valor);
            $produto->setAltura($altura);
            $produto->setLargura($largura);
            $produto->setProfundidade($profundidade);
            
            $produto->cadastrar($produto);
        }    
    }
?>      