<?php
    require('conexao.php');
    $consulta_ids = $pdo->query("SELECT id FROM carros");
    $ids = $consulta_ids->fetchAll();

            foreach ($ids as $key => $value) {
                $idz = $pdo->query("SELECT * FROM carros WHERE id = ".$ids[$key][0]);
                $idz->execute();
                $resultado_idz = $idz->fetchObject();
                $carro_idz = $resultado_idz->id;
                $carro_placa = $resultado_idz->placa;
                $carro_modelo = $resultado_idz->modelo;
                require('carro.php');
            }
        $consulta = $pdo->query("SELECT * FROM carros");
        $numero_de_carros = $consulta->rowCount();
        for ($i=1; $i <= $numero_de_carros; $i++)
        {}
    ?>


<?php require('cabecalho.php'); ?>
<title>JS Veículos</title>
</head>
<body>
<div class="wrapper">
    <div class="fora_carros">
        <?php require('sidebar.php');?>
    </div>
</div>
</body>
</html>