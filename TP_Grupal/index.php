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
    <div class="container">
        <div class="logInContainer">
            <div class="tittleContainer">
                <h1>Welcome Back</h1>
                <p>Enter your credentials to acces your account</p>
            </div>
            <?PHP
            if (conectar()) {


            ?>
            <form class="form" action="login.php" method="POST">
                <input type="email" name="username" placeholder="email">
                <input type="password" placeholder="password" name="password">
                <button>Sign In</button>
            </form>
            <?PHP
            }
            ?>
        </div>

        <div class="forgotP">
            <p>Don't have an account <a href="register.php">Register now</a></p>
        </div>
    </div>
</body>

</html>