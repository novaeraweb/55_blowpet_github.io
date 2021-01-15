<?php 
      require_once 'conecta.php'; 
      require_once 'banco-login.php';
      session_start();

      $login = strip_tags(trim(addslashes($_POST["login"])));
      $senha = strip_tags(trim(addslashes($_POST["senha"])));

      if (validaUsuario($conexao, $login, $senha)) {
        
        $_SESSION["logado"] = true;
        $_SESSION["usuario_logado"] = $login;
        header('location:home.php');

      } else {
        header('location:index.php?erro=true');
      }
      die();