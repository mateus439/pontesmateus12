<?php
require('cabecalho.php');

/* Trata o envio de novo Quarto */
if(isset($_POST['pronto'])){

  $ano = $_POST['ano'];
  $modelo = $_POST['modelo'];
  $placa = $_POST['placa'];
  $cor = $_POST['cor'];
  $informacoes_add = $_POST['informacoes_add'];
  
  
  if(empty($ano) || empty($modelo) || empty($placa) || empty($cor) || empty($informacoes_add)) {
    $erro = 'Preencha todos os campos.';
  }else{
    //aqui
    $data = [
      $ano,
      $modelo,
      $placa,
      $cor,
      $informacoes_add
    ];
    $up_carro = $pdo->prepare("INSERT INTO carros(ano, modelo, placa, cor, informacoes_add) VALUES (?,?,?,?,?)");
    $up_carro->execute($data);
    
    if($up_carro->rowCount () > 0){
      echo 'Carro cadastrado com sucesso!';
  }else{
      echo 'Houve um erro!';;
  }
  }
}
?>
<title>JS Veículos - Adicionar</title>
</head>
<body>

<div class="wrapper">
  <?php require('sidebar.php');?>
  <div class="content">
    
  <form action="" class="form" method="post" enctype="multipart/form-data">
  
      <label for="ano">Ano</label>
      <input type="text" name="ano">
      <label for="modelo">Modelo</label>
      <input type="text" name="modelo">
      <label for="placa">Placa</label>
      <input type="text" name="placa">
      <label for="cor">Cor</label>
      <input type="text" name="cor">
      <label for="informacoes_add">Descrição</label>
      <input type="text" name="informacoes_add">

      <button type="submit" name="pronto">Adicionar</button>

    </form>
    </div>
  </div>
</body>
</html>