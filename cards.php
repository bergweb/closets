<!DOCTYPE html>
<html lang="pt-br">
<head>
    <style>
        .card{
            margin left: 150px;
            padding: 10px;
            box-shadow: 10px 10px 10px #000000;
        }
        
        </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="style" type="text/css" href="css/stylecards.css" media="screen" />
    <title>Cards</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php for($x=1;$x<=10;$x++){?>
                <div class= "col-sm-6" style="max-width: 20rem;margin: 15px 30px;">
                <img class="card-img-top" src="img/logo.jpg" alt="logo Closet's">
                    <div class="card">
                        <div class="card-body">
                        <h5 class="card-title">Título especial</h5>
                        <p class="card-text">Com suporte a texto embaixo, que funciona como uma introdução a um conteúdo adicional.</p>
                        <a class="text">registrar <a href="#" class="btn btn-primary">Adicionar ao Carrinho</a>
                        </div>
                    </div>
                </div>
                <?php }?>
        </div>
    </div>
    
</body>
</html>