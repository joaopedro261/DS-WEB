<?php
    include_once('arrays.php');

    /* Exemplo de uso d is_array*/
    $variaveltexto = 'Arthur';
    if (is_array($variaveltexto)){
            echo "é uma array";
    }else{
        echo "Não é uma array";
    }
    
    /*Exemplo de array unshift() e array_push() */
    array_unshift($estado, "Rio Grande do Sul"); //Adiciona no inicio
    array_push($estado, "Paraná"); //Adiciona no fim

    foreach($estado as $estadoLinha){
        echo 'Estado: ' .$estadoLinha.'<br>';
    }


    echo'<br><br><br>';
     /*Exemplo de array_shift() e array_push() */
     $removido = array_shift($estado); //Remove no inicio
     echo $removido.'<br>';

     $removido = array_pop($estado);//Remove do final
     echo $removido.'<br><br>';
     
     /* Exemplo de uso do in_array */
     if(in_array("São Paulo", $estado)){
        echo "Estado encontrado";
     }

     /* Exemplo de uso do array_key_exists() */

     if(array_key_exists('SP', $estadoChaves))
        echo "Chave encontrada";
?>