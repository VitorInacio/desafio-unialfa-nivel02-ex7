<?php
    $servidor = "localhost";
    $usuario  = "root";
    $senha    = "root";
    $banco    = "ex7";

    $pdo = new PDO("mysql:host={$servidor};dbname={$banco};port=8889;charset=utf8;",$usuario,$senha);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <base href="http://localhost:8888/ex7/">

</head>
<body>
    <table>
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Região</th>
                <th scope="col">Descrião</th>
                <th scope="col">Status</th>
                <br>
            </tr>
        </thead>
        
        <tbody>
        <?php

            $sql = "SELECT * FROM pesquisa";
            $con = $pdo->query($sql);
            $pesquisas = $con->fetchAll(PDO::FETCH_OBJ);

            foreach($pesquisas as $pesquisa){
                ?>
                <tr>
                    <th scope="row"><?=$pesquisa->id?></th>
                    <td><?=$pesquisa->regiao?></td>
                    <td><?=$pesquisa->descricao?></td>
                    <td><?=$pesquisa->status?></td>
                    <br>
                </tr>
            <?php
            };
        ?>
        </tbody>
    </table>
</body>
</html>