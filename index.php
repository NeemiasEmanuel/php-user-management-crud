<?php 

    //Pegando exatamente o que o usuário está digitando
  $url = strtoupper($_GET['url']);



    if($url=="CADASTRO")
    {
        require_once("View/cadastro.php");
    }
    elseif($url=="CADASTRAUSUARIO")
    {
        require_once("Controller/usuarioController.php");
        $controle = new usuarioController();
        $controle->processa("C");
    }
    elseif($url=="LISTAUSUARIO")
    {
        require_once("Controller/usuarioController.php");
        $controle = new usuarioController();
        $controle->processa("R");
    }

    elseif($url=="EXCLUIR")
    {
        require_once("Controller/usuarioController.php");
        $controle = new usuarioController();
        $id = $_SERVER['REQUEST_URI'];
        //var_dump($id);
        $teste = explode("=",$id);
        $idExcluir = $teste[1];
        $controle->processaDelete("E", $idExcluir);
    }

?>