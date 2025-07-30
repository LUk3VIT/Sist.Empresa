<?php

    include '_Conect.php';

    class Usuario {
        private $nome;
        private $email;
        private $senha;
        private $funcao;

        function __construct($nome, $email, $senha, $funcao)
        {
            $this->$nome;
            $this->$email;
            $this->$senha;
            $this->$funcao;   
        }

        public function getNome() {
            return $this->nome;
        }
        public function getEmail() {
            return $this->email;
        }
        public function getSenha() {
            return $this->senha;
        }
        public function getFuncao() {
            return $this->funcao;
        }

        public function setNome($nome) {
            $this->nome = $nome;
        }
        public function setEmail($email){
            $this->email = $email;
        }
        public function setSenha($senha) {
            $this->senha = $senha;
        }
        public function setFuncao($funcao) {
            $this->funcao = $funcao;
        }
    }

    class HelpersUsuario{
        private $conexao;

        public function __construct()
        {
            $this->conexao = new Conexao("localhost", "root", "", "magnus");
            if ($this->conexao->Conectar() == false){
                echo "Erro de conexão ". mysqli_connect_error();
            }
        }

        function CadastroUser($Usuario) {
            $nome_User = $Usuario->getNome();
            $email_User = $Usuario->getEmail();
            $senha_User = $Usuario->getSenha();
            $funcao_user = $Usuario->getFuncao();

            $sql = "INSERT INTO tbl_user(id_user, nome, email, senha, funcao) VALUES
            ('', '$nome_User', '$email_User', '$senha_User', '$funcao_user')";

            $this->conexao->executarQuery($sql);
        }  

        function LoginUser($nome, $senha) {
            $sql = "SELECT * FROM tbl_user WHERE nome = '$nome' AND senha = '$senha'";
            $consulta = $this->conexao->executarQuery($sql);
            $resgistro = mysqli_fetch_array($consulta);
            return $resgistro;
        }

    }

?>
