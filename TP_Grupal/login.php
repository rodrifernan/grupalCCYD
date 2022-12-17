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
$user = $_POST['username'];
$pass = $_POST['password'];
//echo $pass . "<br>";
$pass = md5($pass);
//echo $pass . "<br>";

$sql = "select * from usuarios where nombreusuario = '$user' and password = '$pass'" ;
$result = mysqli_query($connect , $sql);
$row = mysqli_fetch_array($result , MYSQLI_ASSOC);
$count = mysqli_num_rows($result);
    if($connect){
        if ($count == 1) {
        echo "Logueado bien";
        $instruccion="Select * from tareas where mail='$user'";
        $consulta=mysqli_query($connect,$instruccion) or die ("Fallo en la consulta");
        $filas=mysqli_num_rows($consulta);
        ?>
        <div class= 'container'>
            <div class="text-center bg-primary"><?php echo $user;?>'s lista de ToDos</div>  <!-- Esto queda masomenos bien -->
            <form action="insertarTarea.php" method="post">
                <div class="form-group">
                    <input type="text" class="form-control" id="tareaNueva" name="tareaNueva" placeholder="Ingrese una nueva tarea">
                    <input type="text" class="form-control" id="usuarioCheck" name= "usuarioCheck" placeholder="Confirme su Nombre">
                    <button class="btn btn-primary" type="submit">Agregar</button>
                </div>
            </form>
            <?php
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
                    print "<tr><th></th><th><input type='descripcion' name='descripcion' value=''  placeholder='Ingrese nueva tarea'>  </th><th>Realizado</th><th>$user</th><th>editar</th><th>Borrar</th></tr>";

            ?>
            </table>
        </div>
        <?php
    desconectar($connect);
    }else{
        echo "Usuario Incorrecto";
    }
}
/* if($connect){
    //print "Estoy conectado";

}else{
    print "No se conectó";
} */


?>