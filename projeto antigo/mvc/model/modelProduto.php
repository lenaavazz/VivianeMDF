<!--criei o model do cadastro do produto. Helena-->
<?php
include "../../bd/Conexao.php";
    class Produto{
        private $descricao;
        private $quantidade;
        private $valor;
        private $altura;
        private $largura;
        private $profundidade;

        //criei uma funcao para conectar no bd. Helena
        public function cadastrar(Produto $produto){
                $conexao = Conexao::abrirConexao();
                
                $sql = "INSERT INTO produto (descricao, quantidade, valor, altura, largura, profundidade)
                VALUES ('".$produto->getDescricao()."','".$produto->getQuantidade()."','".$produto->getValor()."','".$produto->getAltura()."','".$produto->getLargura()."','".$produto->getProfundidade()."') ";
                // use exec() because no results are returned
                try{
                $conexao->exec($sql);
                echo "New record created successfully";
                } catch(PDOException $e) {
                echo $sql . "<br>" . $e->getMessage();
                }
                $conexao = null;  
        }
        /**
         * Get the value of descricao
         */ 
        function getDescricao()
        {
                return $this->descricao;
        }

        /**
         * Set the value of descricao
         *
         * @return  self
         */ 
        public function setDescricao($descricao)
        {
                $this->descricao = $descricao;

                return $this;
        }

        /**
         * Get the value of quantidade
         */ 
        function getQuantidade()
        {
                return $this->quantidade;
        }

        /**
         * Set the value of quantidade
         *
         * @return  self
         */ 
        public function setQuantidade($quantidade)
        {
                $this->quantidade = $quantidade;

                return $this;
        }

        /**
         * Get the value of valor
         */ 
        function getValor()
        {
                return $this->valor;
        }

        /**
         * Set the value of valor
         *
         * @return  self
         */ 
        public function setValor($valor)
        {
                $this->valor = $valor;

                return $this;
        }

        /**
         * Get the value of altura
         */ 
        public function getAltura()
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         *
         * @return  self
         */ 
        public function setAltura($altura)
        {
                $this->altura = $altura;

                return $this;
        }

        /**
         * Get the value of largura
         */ 
        public function getLargura()
        {
                return $this->largura;
        }

        /**
         * Set the value of largura
         *
         * @return  self
         */ 
        public function setLargura($largura)
        {
                $this->largura = $largura;

                return $this;
        }

        /**
         * Get the value of profundidade
         */ 
        public function getProfundidade()
        {
                return $this->profundidade;
        }

        /**
         * Set the value of profundidade
         *
         * @return  self
         */ 
        public function setProfundidade($profundidade)
        {
                $this->profundidade = $profundidade;

                return $this;
        }
} 
?>