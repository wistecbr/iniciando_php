<?php
   include './lib/bancoDados.php';
   $alunos = listaAlunos();
   $sessao = sessao();
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
            <p>Nome: <input id="inputName" type="text" name="name" /></p>
            <p>Idade: <input id="inputIdade" type="number" name="age" onchange="isNumber(value)"  placeholder="Apenas números." /></p>
            <p>Sexo:
            <select id="box-sexo" name="sexo">
                <option value="m">Masculino</option>
                <option value="f">Feminino</option>
                <option value="x">X</option>
            </select> </p>
            <p><input type="submit" value="Cadastrar" /> 
            <input type="button" value="Cancelar" onclick="reset()" /></p>
        </form>        
    </main>
</body>
</html>