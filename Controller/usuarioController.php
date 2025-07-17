<?php 
require_once('Model/usuario.php');
//Controller é responsável por ligar a parte do front com a part do back.
class usuarioController{

    public function processa($acao)
    {
        if($acao == "C") //CREATE (INSERT)
        {
            //Abaixo é criado/instanciado um objeto do tipo usuário
            $novoUsuario = new Usuario();
            //Na sequência utilizando os getters e setters da classe usuário e os names utilizados 
            //no formulário que estão na view (cadastro.php) tem-se o código abaixo.

            $dataNasc = explode("/",$_POST['dataNascimento']);
            $_POST['dataNascimento'] = $dataNasc[2] ."-" . $dataNasc[1] ."-". $dataNasc[0];

            $cpfAux = str_replace(".", "", $_POST['cpf']);
            $_POST['cpf'] = str_replace("-", "", $cpfAux);

            

            $novoUsuario->setNomeUsuario($_POST['nome']);
            $novoUsuario->setEstadoCivil($_POST['estadoCivil']);
            $novoUsuario->setDataNascimento($_POST['dataNascimento']);
            $novoUsuario->setEstadoNascimento($_POST['estadoNascimento']);
            $novoUsuario->setCpf($_POST['cpf']);
            $novoUsuario->setProfissao($_POST['profissao']);

            //Chamando o método cadastraUsuario que criamos na classe usuario.php
            $novoUsuario->cadastraUsuario();
        }
        
        elseif($acao == "R") //READ (SELECT)
        {
            $Usuario = new Usuario();
            $Usuario->ListaUsuario();

        }

    }

    public function processaDelete($acao, $id)
    {
        if($acao == "E") //EXCLUIR (DELETE)
        {
            $Usuario = new Usuario();
            $Usuario->ExcluirUsuario($id);

        }
    }
    
}
?>