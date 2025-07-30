<?php

    class Produto {
        private $nome;
        private $descricao;
        private $quantidade;
        private $codigo;
        private $tipo;

        function __construct($nome, $descricao, $quantidade, $tipo, $codigo)
        {
            $this->nome = $nome;
            $this->descricao = $descricao;
            $this->quantidade = $quantidade;
            $this->tipo = $tipo;
            $this->codigo = $codigo;
        }

        public function getNome() {
            return $this->nome;
        }
        public function getDescricao() {
            return $this->descricao;
        }
        public function getQuantidade() {
            return $this->quantidade;
        }
        public function getCodigo() {
            return $this->codigo;
        }
        public function getTipo() {
            return $this->tipo;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setDescricao($descricao) {
            $this->descricao = $descricao;
        }
        public function setQuantidade($quantidade){
            $this->quantidade = $quantidade;
        }
        public function setCodigo($codigo) {
            $this->codigo = $codigo;
        }
        public function setTipo($tipo) {
            $this->tipo = $tipo;
        }
    }

    class HelpersProduto{
        private $conexao;

        public function __construct()
        {
            $this->conexao = new Conexao("localhost", "root", "", "Magnus");
            if ($this->conexao->Conectar() == false){
                echo "Erro de conexão ". mysqli_connect_error();
            }

        }

        function CadastroProd($produto, $id_user){
            $nome_Produto = $produto->getNome();
            $descricao_Produto = $produto->getDescricao();   
            $quantidade_Produto = $produto->getQuantidade();
            $codigo_Produto = $produto->getCodigo();
            $tipo_Produto = $produto->getTipo();

            $sql = "INSERT INTO TBL_user(id_prod, nome, descricao, quantidade, codigo, tipo, id_user) VALUES
            ('', '$nome_Produto', '$descricao_Produto', '$quantidade_Produto', '$codigo_Produto','$tipo_Produto','$id_user')";
        }
    }
?>