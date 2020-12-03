<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tela de Login</title>
    <link rel="stylesheet" href="./styles/telaLogin.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
    
    <header>
        <img src="./img/grenalmovies.png" width="100px">
    </header>


    <div class="container">
        <div class="quadrado">
            
        <h1>Entrar</h1>

        <form action="">
            <input type="name" id="nome" placeholder="Email ou número de telefone">
            <br>
            <input type="text"  id="senha" placeholder="Digite sua senha"> 
            <br>
            <input type="submit" value="Entrar" id="botaoSubmit"><br>
        </form>


        <p id="merchan">Novo por aqui? Assine agora!</p>
        </div>
    </div>
  
</body>
</html>

<?php

$connection = mysqli_connect("localhost", "root", "", "pac");
 
// executa a consulta
$sqlConsult = "SELECT email, senha FROM login";
$answer = mysqli_query($connection, $sqlConsult);

$usuarioEnviado = 'gabrielmuller708@gmail.com';
$senhaEnviado = 12345;


while ($columns = mysqli_fetch_array($answer)){
    
    if($columns['email'] == $usuarioEnviado && $columns['senha'] == $senhaEnviado){
        echo "<p>Funcionou. Pode realizar o login</p>";
        $status = true;
        break;
    }
    $status = false;
}

if($status){
    echo "<p>Tela de Login</p>";
}else{
    echo "<p>Tela de Cadastro</p>";
}
 
// fecha a conexão
mysqli_close($connection);

?>

