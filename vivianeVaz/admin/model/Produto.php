<?php
include "../../bancoDeDados/Conexao.php";

class Produto{
    private $nome;
    private $categoria;
    
    public function cadastrar(Produto $produto){
        $conexao = Conexao::abrirConexao();

        $nome = $produto->getNome();
        $categoria = $produto->getCategoria();
        
        $sql = "INSERT INTO produtos (nome, categoria)
        VALUES ('".$nome."', '".$categoria."') ";
    
        try{
            $conexao->exec($sql);
            return true;
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
        $conexao = null;  
    }

    public function getAllProdutosss(){
        $conexao = Conexao::abrirConexao();

        $sql = "SELECT * FROM produtos";

        $result = $conexao->query($sql);
        
        if($result != null){
            $produtos = $result->fetchAll();
            return $produtos;
        }
        return null;
    }

    public function deleteProduto($id) {
        $conexao = Conexao::abrirConexao();

        $sql = "DELETE FROM produtos WHERE id = $id";

        $conexao->query($sql);
    }

    function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    function getCategoria(){
        return $this->categoria;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;

        return $this;
    }
}
?>