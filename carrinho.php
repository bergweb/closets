<?php
    $conexao = new PDO('mysql:host=localhost;dbname=closets',"root","");
    $select = $conexao->prepare("select * FROM produtos");
    $select->execute();
    $fetch = $select->fetchAll();

    foreach($fetch as $produto){

        echo 'Nome do produto: '.$produto['nome'].' &nbsp; 
              Quantidade: '.$produto['quantidade'].'
              &nbsp; Preço: R$ '.number_format($produto['preco'],2,",",".").'
              <a href="adicionar.php?add=carrinho&id='.$produto['id'].'">Adicionar ao carrinho</a>
              </br>';
    }

?>