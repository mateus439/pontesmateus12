<?php
  $nome_adm = $_SESSION['usuario']['name'];
?>
<div class="sidebar barralateral">
  <h2>JS Carros</h2>

  <img src="imagens/icone_empresa.png" alt="" srcset="" id="logo-barra-lateral">
  <ul class="lista-menu">
    <li><a href="add.php"><img src="imagens/add.png" alt=""></a></li>
    <li><a href="rmv.php"><img src="imagens/remove.png" alt=""></a></li>
  </ul>
    <a href="logout.php" id="botao-sair">Sair</a>
  </div>
  <h4 id="foto-nome"><?php echo $nome_adm;?></h4>
  <img src="https://mir-s3-cdn-cf.behance.net/user/276/1f070e867783.5d4862a870b71.jpg" alt="" srcset="" id="foto-jezmael">
