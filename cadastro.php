<?php

include_once("conexao.php");

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$cpf = $_POST['cpf'];
$login = $_POST['login'];
$senha = $_POST['senha'];

$sql = "insert into usuarios (nomeUsuario,sobrenomeUsuario,emailUsuario,cpfUsuario,loginUsuario,senhaUsuario) values('$nome','$sobrenome','$email','$cpf','$login','$senha')";
$salvar = mysqli_query($conexao,$sql);
//$linhas = mysqli_affected_rows($conexao);

mysqli_close($conexao);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CADASTRO DE USUARIO</title>
</head>
<body>
    <h1>CADASTRO DE USUARIO</h1>
        <hr><br><br>
        <?php
            if($salvar){
                print "Cadastro efetuado com sucesso!";
            }else{
                print "Cadastro não efetuado.<br>Já existe um usuário com este e-mail!";
            }

        ?>


        <?php
           /* if($linhas == 1){
                print "Cadastro efetuado com sucesso!";
            }else{
                print "Cadastro não efetuado.<br>Já existe um usuário com este e-mail!";
            }*/

        ?>
</body>
</html>