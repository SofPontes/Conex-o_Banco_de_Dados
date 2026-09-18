<?php

include "conexao.php";
$nome = "";
$email = "";
$mensagem = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    if($nome === "" || $email === ""){
        $mensagem = "Preencha todos os campos";
        echo "<br><center><strong>$mensagem</strong></center>";
    } else{
        $sql = "INSERT INTO usuário (nome, email) VALUES ('$nome','$email')";
        $conexao->query($sql);
        echo "<center><strong>Cadastro realizado com sucesso!</strong></center>";
        $nome = "";
        $email = "";
    }

}
    
?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
</head>
<body  style="background-color:#B0E0E6">

    <center><h2>Bem-vindo ao cadastro!</h2></center>
    <center><img src="img_cadastro/caveiracadastro.gif" alt="" height="30%" width="20%"></center>

    <center>
        <h3>Preencha as informações:</h3>

    <form method="POST">  
        <input name="nome" placeholder="Nome" value="<?php echo $nome; ?>">
            <br>
            <br>
        <input type="email" name="email" placeholder="E-mail" value="<?php echo $email; ?>">
            <br>
            <br>
        <button>Cadastrar</button>
    </form>
    </center>

</body>
</html>

