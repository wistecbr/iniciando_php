<?php    
    include './lib/bancoDados.php';

    if( isset($_POST) && isset($_POST['login']) && isset($_POST['pass'])){
        $login = htmlspecialchars($_POST['login']);
        $pass = md5(htmlspecialchars($_POST['pass']));

        sessaoLogin($login);        
    }

    if(isset($_GET) && isset($_GET['sair'])){
        session_start();
        $_SESSION = array();
        session_destroy();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/stilos.css">
    <script src="./assets/js/script.js" defer></script>
    <title>Login</title>
</head>
<body>
    <header>
        <figure>
            <img src="" alt="logo">
        </figure>
        <section>
        </section>
    </header>
    <main>
        <form action="/login.php" method="post">
            <p>Login: <input id="inputLogin" type="text" name="login" /></p>
            <p>Senha: <input id="inputPassword" type="password" name="pass"/></p>
            <p><input type="submit" value="Login" /> 
            <input type="button" value="Cancelar" onclick="resetLogin()" /></p>
        </form>        
    </main>
    
</body>
</html>