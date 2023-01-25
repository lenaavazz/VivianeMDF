<?php
include "../../bancoDeDados/Conexao.php";

class Cliente{
    private $nome;
    private $email;
    private $endereco;
    private $complemento;
    private $numeroCasa;
    private $estado;
    private $cidade;
    private $telefone;
    
    public function cadastrar(Cliente $cliente){
        $conexao = Conexao::abrirConexao();

        $nome = $cliente->getNome();
        $email = $cliente->getEmail();
        $endereco = $cliente->getEndereco();
        $complemento = $cliente->getComplemento();
        $numeroCasa = $cliente->getNumeroCasa();
        $estado = $cliente->getEstado();
        $cidade = $cliente->getCidade();
        $telefone = $cliente->getTelefone();
        
        $sql = "INSERT INTO clientes (nome, email, endereco, complemento, numero_casa, estado, cidade, telefone)
        VALUES ('".$nome."','".$email."', '".$endereco."', '".$complemento."', '".$numeroCasa."',
            '".$estado."', '".$cidade."', '".$telefone."') ";
    
        try{
            $conexao->exec($sql);
            return true;
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
        $conexao = null;  
    }

    public function getAllClientes(){
        $conexao = Conexao::abrirConexao();

        $sql = "SELECT * FROM clientes";

        $result = $conexao->query($sql);
        
        if($result != null){
            $clientes = $result->fetchAll();
            return $clientes;
        }
        return null;
    }

    public function deleteCliente($id) {
        $conexao = Conexao::abrirConexao();

        $sql = "DELETE FROM clientes WHERE id = $id";

        $result = $conexao->query($sql);

        return $result;
    }

    function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    function getEmail() {
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;

        return $this;
    }

    function getEndereco() {
        return $this->endereco;
    }

    public function setEndereco($endereco){
        $this->endereco = $endereco;

        return $this;
    }

    function getComplemento() {
        return $this->complemento;
    }

    public function setComplemento($complemento){
        $this->complemento = $complemento;

        return $this;
    }

    function getNumeroCasa() {
        return $this->numeroCasa;
    }

    public function setNumeroCasa($numeroCasa){
        $this->numeroCasa = $numeroCasa;

        return $this;
    }

    function getEstado() {
        return $this->estado;
    }

    public function setEstado($estado){
        $this->estado = $estado;

        return $this;
    }

    function getCidade() {
        return $this->cidade;
    }

    public function setCidade($cidade){
        $this->cidade = $cidade;

        return $this;
    }

    function getTelefone() {
        return $this->telefone;
    }

    public function setTelefone($telefone){
        $this->telefone = $telefone;

        return $this;
    }
}
?>