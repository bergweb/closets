<?php
session_start();
if(!isset($_SESSION['itens']))
{
    $_SESSION['itens'] = array();
}

if(isset($_GET['add']) && $_GET['add'] == "carrinho")
{
    /*Adiciona ao carrinho*/
    $idProduto = $_GET['id'];
    if(!isset($_SESSION['itens'][$idProduto]))
    {
        $_SESSION['itens'][$idProduto] = 1;
    } else{
        $_SESSION['itens'][$idProduto] += 1;
    }
}
/*Exibe o carrinho*/
if(count($_SESSION['itens']) == 0){
    echo 'Carrinho Vazio<br><a href="carrinho.php">Adicionar itens</a>';
}else{
    $conexao = new PDO('mysql:host=localhost;dbname=closets',"root","");
    foreach($_SESSION['itens'] as $idProduto => $quantidade)
    {
    $select = $conexao->prepare("select * FROM produtos WHERE id=?");
    $select->bindParam(1,$idProduto);
    $select->execute();
    $produtos = $select->fetchAll();
    echo 
        'Nome: '.$produtos[0]["nome"].'<br>
        Preço: '.number_format($produtos[0]["preco"],2,",",".").'<br>
        Quantidade: '.$quantidade.'<br><hr>
        
        ';
    }
}




?>