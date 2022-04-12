<?php
   include './lib/bancoDados.php';
   $alunos = listaAlunos();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/reset.css">
    <link rel="stylesheet" href="./assets/css/stilo.css">
    <script src="./assets/js/script.js" defer></script>
    <title>Listar Alunos</title>
</head>
<body>
<header>
        <figure>
            <img src="" alt="logo">
        </figure>
        <section>
            <a href="/">HOME</a>
            <a href="/listaAlunos.php">Alunos</a>
            <a href="/cadastrarAluno.php">Cadastrar</a>
        </section>
    </header>
    <main>
        <form action="/listaAlunos.php" method="post">
            <p>Your name: <input type="text" name="name" /></p>
            <p>Your age: <input type="text" name="age" /></p>
            <select id="box-sexo" name="sexo">
                <option value="m">Masculino</option>
                <option value="f">Feminino</option>
                <option value="x">X</option>
            </select>
            <p><input type="submit" /></p>
        </form>        
    </main>
</body>
</html>