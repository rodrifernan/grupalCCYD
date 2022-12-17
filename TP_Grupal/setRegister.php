<?PHP
require "connectDB.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <title>Document</title>
</head>

<body>
    <?PHP
    $connect = conectar();
    if ($connect) {
        $EMAIL = $_POST['username'];
        $PASSWORD = $_POST['password'];
        $encryptedPassword = md5($PASSWORD);
        $sql = "INSERT INTO `cursoasap`.`usuarios` (`nombreusuario`, `password`) VALUES (" . "'$EMAIL'" . ", '$encryptedPassword');";
        $query = mysqli_query($connect, $sql) or die(mysqli_error($connect));
        $exito = "Contrasenia creada con exito";
        ?>
        <a href="index.php">Volver al inicio</a>
        <?php
        print $exito;
    } else {
        print "fallo";
    }
    ?>
</body>

</html>