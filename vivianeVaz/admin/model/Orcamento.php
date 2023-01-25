<?php
include "../../bancoDeDados/Conexao.php";

class Orcamento{
    private $produto;
    private $cliente;
    private $enderecoEntrega;
    private $dataEntrega;
    private $descricao;
    
    public function cadastrar(Orcamento $orcamento){
        $conexao = Conexao::abrirConexao();

        $produto = $orcamento->getProduto();
        $cliente = $orcamento->getCliente();
        $enderecoEntrega = $orcamento->getEnderecoEntrega();
        $dataEntrega = $orcamento->getDataEntrega();
        $descricao = $orcamento->getDescricao();
        
        $sql = "INSERT INTO orcamentos (produto, cliente, endereco_entrega, data_entrega, descricao)
        VALUES ('".$produto."','".$cliente."', '".$enderecoEntrega."', '".$dataEntrega."', '".$descricao."') ";
    
        try{
            $conexao->exec($sql);
            return true;
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
        $conexao = null;  
    }

    public function getAllOrcamentos(){
        $conexao = Conexao::abrirConexao();

        $sql = "SELECT * FROM orcamentos";

        $result = $conexao->query($sql);
        
        if($result != null){
            $orcamentos = $result->fetchAll();
            return $orcamentos;
        }
        return null;
    }

    public function deleteOrcamento($id) {
        $conexao = Conexao::abrirConexao();

        $sql = "DELETE FROM orcamentos WHERE id = $id";

        $conexao->query($sql);
    }

    function getProduto(){
        return $this->produto;
    }

    public function setProduto($produto){
        $this->produto = $produto;

        return $this;
    }

    function getCliente(){
        return $this->cliente;
    }

    public function setCliente($cliente){
        $this->cliente = $cliente;

        return $this;
    }

    function getEnderecoEntrega(){
        return $this->enderecoEntrega;
    }

    public function setEnderecoEntrega($enderecoEntrega){
        $this->enderecoEntrega = $enderecoEntrega;

        return $this;
    }

    function getDataEntrega(){
        return $this->dataEntrega;
    }

    public function setDataEntrega($dataEntrega){
        $this->dataEntrega = $dataEntrega;

        return $this;
    }

    function getDescricao(){
        return $this->descricao;
    }

    public function setDescricao($descricao){
        $this->descricao = $descricao;

        return $this;
    }
}
?>