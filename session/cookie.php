<?php
    //Criando um cookie
    setcookie("usuario", "João", time() + 7*24*(60*60), '/');
    //setcookie("usuarioAntigo", "João", time() + 7*24*(60*60), '/');

    //Destruindo um cookie
    setcookie("usuarioAntigo", "João", -3600, '/');
    print_r($_COOKIE);
?>