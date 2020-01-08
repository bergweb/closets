<?php
    include "conexao.php";

    echo "<h1>Cliente Consultado</h1>";

    $cpfcliente = $_POST["cpfCliente"];

    $consultar =mysqli_query($conexao,"select * from usuarios where cpfUsuario ='$cpfcliente'");
    
    if(!$consultar){
        echo "<script>alert('Erro ao consultar')
        location.href = 'consultarCliente.html'</script>";
    }else{
        echo "<table border='1'>";

        echo "<tr>
            <th>Id Cliente</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>E-mail</th>
            <th>CPF</th>
            <th>Operações</th>
             </tr>";
        while($linha = mysqli_fetch_array($consultar)){
            echo "<tr>
                    <td>".$linha["idUsuario"]."</td>
                    <td>".$linha["nomeUsuario"]."</td>
                    <td>".$linha["sobrenomeUsuario"]."</td>
                    <td>".$linha["emailUsuario"]."</td>
                    <td>".$linha["cpfUsuario"]."</td>
                    <td><a href =''>Editar</a> --
                    <a href = ''>Excluir</a></td>
                </tr>";
        }
        echo "</table>";
    }
?>