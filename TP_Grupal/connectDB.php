<?php

function conectar(){
    // usuario 'MAESTRO' que se conecta con la BD
    $usuario = "root";
    $pass = "1234";
    $bd = "cursoasap";
    $servidor = "localhost"; // 127.0.0.1 .... 192.1.168.33 (asap.com.ar:8080)--> Servidor de BD

    $connect = mysqli_connect($servidor, $usuario, $pass, $bd);
    return $connect;
}

function desconectar($connect){
    mysqli_close($connect);
}

?>