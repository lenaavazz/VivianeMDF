<?php
include "../../bancoDeDados/Conexao.php";

class Usuario{
    private $nome;
    private $email;
    private $senha;
    private $categoria;
    
    public function cadastrar(Usuario $usuario){
        $conexao = Conexao::abrirConexao();

        $nome = $usuario->getNome();
        $email = $usuario->getEmail();
        $senha = $usuario->getSenha();
        $categoria = $usuario->getCategoria();
        
        $sql = "INSERT INTO usuarios (nome, email, senha, categoria)
        VALUES ('".$nome."','".$email."', '".$senha."', '".$categoria."') ";
    
        try{
            $conexao->exec($sql);
            return true;
            
        } catch(PDOException $e) {
            echo $sql . "<br>" . $e->getMessage();
            return false;
        }
        $conexao = null;  
    }

    public function getAllUsers(){
        $conexao = Conexao::abrirConexao();

        $sql = "SELECT * FROM usuarios";

        $result = $conexao->query($sql);
        
        if($result != null){
            $users = $result->fetchAll();
            return $users;
        }
        return null;
    }

    public function deleteUser($id) {
        $conexao = Conexao::abrirConexao();

        $sql = "DELETE FROM usuarios WHERE id = $id";

        $conexao->query($sql);
    }

    function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        $this->nome = $nome;

        return $this;
    }

    function getEmail(){
        return $this->email;
    }

    public function setEmail($email){
        $this->email = $email;

        return $this;
    }

    function getSenha(){
        return $this->senha;
    }

    public function setSenha($senha){
        $this->senha = $senha;

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