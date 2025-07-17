<?php 
    include_once('Model/conexao.php');

    class Usuario{

        
        private $idUsuario;//Acesso permitido somente dentro desta classe
        private $nomeUsuario;
        private $estadoCivil;
        private $dataNascimento;
        private $estadoNascimento;
        private $cpf;
        private $profissao;

        public function cadastraUsuario()
        {
            try{
                //Devido a classe ser estática não é preciso instanciar o objeto.
                $conn = Conexao::conectar();

                $sql = $conn->prepare("INSERT INTO teste.usuariomvc (nomeUsuario, estadoCivil, dataNascimento, estadoNascimento, cpf, profissao) VALUES (:nomeUsuario, :estadoCivil, :dataNascimento, :estadoNascimento, :cpf, :profissao)");
                $sql->bindParam("nomeUsuario", $nomeUsuario);
                $sql->bindParam("estadoCivil", $estadoCivil);
                $sql->bindParam("dataNascimento", $dataNascimento);
                $sql->bindParam("estadoNascimento", $estadoNascimento);
                $sql->bindParam("cpf", $cpf);
                $sql->bindParam("profissao", $profissao);
                
                $nomeUsuario=$this->nomeUsuario;
                $estadoCivil=$this->estadoCivil;
                $dataNascimento=$this->dataNascimento;
                $estadoNascimento=$this->estadoNascimento;
                $cpf=$this->cpf;
                $profissao=$this->profissao;

                $sql->execute();
                

            }catch(PDOException $erro)
            {
                echo "Cadastro falhou! " . $erro->getMessage();
            }
        }

        public function ListaUsuario()
        {
            $conn = Conexao::conectar();

            $sql = $conn->prepare("SELECT id, nomeUsuario, estadoCivil, DATE_FORMAT(dataNascimento, '%d/%m/%Y') as dataNascimento, estadoNascimento, cpf, profissao FROM teste.usuariomvc");
            
            $sql->execute();
            $result = $sql->fetchAll();

           // print_r($result);
           require_once('./View/listar.php');

        }

        public function ExcluirUsuario($id)
        {
            $conn = Conexao::conectar();

            $sql = $conn->prepare("SELECT id, nomeUsuario, estadoCivil, DATE_FORMAT(dataNascimento, '%d/%m/%Y') as dataNascimento, estadoNascimento, cpf, profissao FROM teste.usuariomvc");

            $sql->execute();
            $result = $sql->fetchAll();

            if(!empty($id))
            {
                $sqlDelete = $conn->prepare("DELETE FROM teste.usuariomvc WHERE id=$id");
                $sqlDelete->execute();
            }
           
            require_once('./View/excluir.php');
            

        }


        //Acesso às variáveis através de getters e setters
        public function getIdUsuario(){
            return $this->idUsuario;
        }

        public function setIdUsuario($idUsuario){
            $this->idUsuario = $idUsuario;
        }

        public function getNomeUsuario(){
            return $this->nomeUsuario;
        }

        public function setNomeUsuario($nomeUsuario){
            $this->nomeUsuario = $nomeUsuario;
        }

        public function getEstadoCivil(){
            return $this->estadoCivil;
        }

        public function setEstadoCivil($estadoCivil){
            $this->estadoCivil = $estadoCivil;
        }

        public function getDataNascimento(){
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento){
            $this->dataNascimento = $dataNascimento;
        }

        public function getEstadoNascimento(){
            return $this->estadoNascimento;
        }

        public function setEstadoNascimento($estadoNascimento){
            $this->estadoNascimento = $estadoNascimento;
        }

        public function getCpf(){
            return $this->cpf;
        }

        public function setCpf($cpf){
            $this->cpf = $cpf;
        }

        public function getProfissao(){
            return $this->profissao;
        }

        public function setProfissao($profissao){
            $this->profissao = $profissao;
        }

        

    }
?>