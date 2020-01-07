<?php
    session_start();
    $idProduto = $_GET['id'];
    i(isset($_GET['remove']) && $_GET['remover'] == "carrinho")
    {
        $idProduto = $_GET['id']
        unset($_SESSION['itens'][$idProduto]);
        echo '<meta HTTP-EQUIV="REFRESH" CONTENT="0;URL=adicionar.php/>';

    }

?>