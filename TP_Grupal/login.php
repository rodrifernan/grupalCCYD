<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<?php
require 'connectDB.php';

$connect = conectar();
$user = $_POST['user'];
$pass = $_POST['pass'];
$pass = md5($pass);

$sql = "select * from usuarios where nombreusuario = '$user' and password = '$pass'" ;
$result = mysqli_query($connect , $sql);
$row = mysqli_fetch_array($result , MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
if ($count == 1) {
    echo "Logueado bien";
    $instruccion="Select * from tareas";
    $consulta=mysqli_query($connect,$instruccion) or die ("Fallo en la consulta");
    $filas=mysqli_num_rows($consulta);
    ?>
    <div class="text-center bg-primary"><?php echo $user;?>'s lista de ToDos</div>  <!-- Esto queda masomenos bien -->

    <?php
    print "<div class= 'container'>";
        print "<table class='table table-striped'>";
            print "<tr><th>ID</th><th>Descripcion</th><th>Realizado</th><th>#</th>";
            while ($fila=mysqli_fetch_array($consulta)){
                print "<tr>
                <td>".$fila['ID']."</td>
                <td>".$fila['descripcion']."</td>
                <td>".$fila['realizado']."</td>
                <td><input type='checkbox' ></td>
                
                </tr>";
            }
        print "</table>";
    print "</div>";
    
 desconectar($connect);
}else{
    echo "Usuario Incorrecto";
}

/* if($connect){
    //print "Estoy conectado";

}else{
    print "No se conectó";
} */


?>