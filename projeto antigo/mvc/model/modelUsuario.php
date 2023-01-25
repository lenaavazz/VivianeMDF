<!--criei o model do cadastro. Helena-->
<?php
include "../../bd/Conexao.php";
    class Usuario{
        private $nome;
        private $email;
        private $telefone;
        private $cep;
        private $cidade;
        private $senha;
        private $confirmarS;
        
        //criei uma funcao para conectar no bd. Helena
        public function cadastrar(Usuario $user){
                $conexao = Conexao::abrirConexao();
                
                $sql = "INSERT INTO cliente (nome, email, telefone, cep, cidade, senha, confirmarS )
                VALUES ('".$user->getNome()."','".$user->getEmail()."', '".$user->getTelefone()."', '".$user->getCep()."', '".$user->getCidade()."', '".$user->getSenha()."', '".$user->getConfirmarS()."') ";
                // use exec() because no results are returned
                try{
                        $conexao->exec($sql);
                        ?><html>
                        <div class="alert alert-success sucesso" role="alert">
                        Cadastro realizado com Sucesso!
                        </div>
                        </html><?php
                        } catch(PDOException $e) {
                        echo $sql . "<br>" . $e->getMessage();
                        }
                        $conexao = null;  
                }
        
        /*public function listar(){
                $conexao = Conexao::abrirConexao();
                try{
                        $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                        $stmt = $conexao->prepare("SELECT * FROM cliente");
                        $stmt->execute();

                        // set the resulting array to associative
                        $result = $stmt->fetchAll(PDO::FETCH_OBJ);                
                        
                        return $result;
                } catch(PDOException $e){
                        echo $e->getMessage();
                }
        }
        */
        //getters e setters das variaveis. Helena
        /**
         * Get the value of nome
         */ 
        public function getNome()
        {
                return $this->nome;
        }

        /**
         * Set the value of nome
         *
         * @return  self
         */ 
        public function setNome($nome)
        {
                $this->nome = $nome;

                return $this;
        }

        /**
         * Get the value of email
         */ 
        public function getEmail()
        {
                return $this->email;
        }

        /**
         * Set the value of email
         *
         * @return  self
         */ 
        public function setEmail($email)
        {
                $this->email = $email;

                return $this;
        }

        /**
         * Get the value of telefone
         */ 
        public function getTelefone()
        {
                return $this->telefone;
        }

        /**
         * Set the value of telefone
         *
         * @return  self
         */ 
        public function setTelefone($telefone)
        {
                $this->telefone = $telefone;

                return $this;
        }

        /**
         * Get the value of cep
         */ 
        public function getCep()
        {
                return $this->cep;
        }

        /**
         * Set the value of cep
         *
         * @return  self
         */ 
        public function setCep($cep)
        {
                $this->cep = $cep;

                return $this;
        }

        /**
         * Get the value of cidade
         */ 
        public function getCidade()
        {
                return $this->cidade;
        }

        /**
         * Set the value of cidade
         *
         * @return  self
         */ 
        public function setCidade($cidade)
        {
                $this->cidade = $cidade;

                return $this;
        }

        /**
         * Get the value of senha
         */ 
        public function getSenha()
        {
                return $this->senha;
        }

        /**
         * Set the value of senha
         *
         * @return  self
         */ 
        public function setSenha($senha)
        {
                $this->senha = $senha;

                return $this;
        }

        /**
         * Get the value of confirmarS
         */ 
        public function getConfirmarS()
        {
                return $this->confirmarS;
        }

        /**
         * Set the value of confirmarS
         *
         * @return  self
         */ 

        //funcao de confirmar senha. Helena
        public function setConfirmarS($confirmarS)
        {
                $this->confirmarS = $confirmarS;

                return $this;
        }
    }
?>