<?php
require 'connectDB.php';

$connect = conectar();

if ($connect) {
    // me traigo los datos tipeados en el form por el empleado
    $descripcion = $_POST['tareaNueva']; 
    $user = $_POST['usuarioCheck'];

    $sql = "INSERT INTO `cursoasap`.`tareas` (`descripcion`, `mail`) VALUES ('".$descripcion."', '".$user."')";
    //$sql = "insert into tareas  values ('".$nombre1."', ".$edad1.", ".$camiseta1.", ".$club1.")";

    $rpta = mysqli_query($connect, $sql) or die(mysqli_error($connect));
    print "Tarea " . $descripcion . " fue agregada";
    desconectar($connect);
} else {
    print "<h3>NO Conexion a la BD cursophp<h3>";
}