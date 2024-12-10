<?php
    session_start();
    $loginCerto = 'João';
    $senhaCerto = '123';

    //Verifica se veio do Formulario
    if(isset($_POST['login'])){
        //Verifica se o login esta correto
        if($loginCerto == $_POST['login'] and $senhaCerto == $_POST['senha']){

        $_SESSION['login'] = $_POST['login'];
        $_SESSION['senha'] = $_POST['senha'];
        }
    }
    
    if(isset($_SESSION['login']) and isset($_SESSION['senha'])){
        echo'<br>';
        echo $_POST['login'];
        echo'<br>';
        echo$_POST['senha'];


    }else{
        header('Locatio: index.php');
    }



    
   

?>