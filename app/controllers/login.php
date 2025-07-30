<?php
    session_start();

    require_once '../models/User.php';
    $helpers = new HelpersUsuario();

    $nome = $_POST['Nome_usuario'];
    $senha = $_POST['Senha_usuario'];
    $verificação = $helpers->LoginUser($nome, $senha);
    

    if (empty($verificação)){
        header('Location: ../views/users/login.php?erro=1');
    }else if ( $verificação[4] == "RH"){
        $_SESSION['id'] = $verificação[0];
        $_SESSION['nome'] = $verificação[1];
        $_SESSION['funcao'] = $verificação[4]; 
        header('Location: ../views/RH/index.php');
    }
?>