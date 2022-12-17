<?PHP
require "connectDB.php";
$conect =conectar();
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
    <div class="container">
        <div class="registerContainer">
            <div class="tittleContainer">
                <h1>Fill the form please</h1>
            </div>
            <?PHP
            if ($conect) {
                print "Conectado";
            ?>
            <form class="form" action="setRegister.php" method="POST">
                <label for="username">Email</label>
                <input type="email" name="username">
                <label for="password">Password</label>
                <input type="password" name="password">
                <label for="repeat">Reapeat Password</label>
                <input type="password" name="repeat">
                <button>Log in !</button>
            </form>
            <?PHP
            }
            ?>
        </div>
    </div>
</body>

</html>