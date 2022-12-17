<head>
    <title>loguearse</title>
    <link href="estilos.css" rel="stylesheet" type="text/css">
</head>
<body style="background-color: purple;">
<?php
require 'connectDB.php';

$connect = conectar();
if ($connect) {
    ?>
    <div>
    <form class="container"  action='login.php' method='POST' style="position: absolute; margin: 390px;">
        <label class="etiqueta">Nombre de Usuario:</label>
        <input type="text" name='user' style="width: 100%;margin-bottom:1.5rem"> <br>
        <label>Contraseña:</label>
        <input type="password" name='pass'> <br>
        <input type=submit value='Log In' style="background-color:red; height:80px;width: 80px;margin-top : 3rem;">
        <input type="reset" value="Borrar">
    </form>
    </div>
</body>
<?php
}else{
    print "No se conectó";
}
?>