<?php
ini_set( "display_errors", 0);
require '../config/conexao.php';
  $con = mysqli_connect('us-cdbr-iron-east-03.cleardb.net','b91118ec66dcf8','8ed6f6be','heroku_87bfe723a0b6070');
  if(isset($_POST['executar']))
  {
    $DataInicio=$_POST['DataInicio'];
    $DataFim=$_POST['DataFim'];
    $DataInicio2=$_POST['DataInicio2'];
    $DataFim2=$_POST['DataFim2'];
    $projecao1=$_POST['projecao1'];
    $projecao2=$_POST['projecao2'];
    $set1 = mysqli_query ($con, "SET @rank1=0");
    $set2 = mysqli_query ($con, "SET @rank2=0");
    $query = mysqli_query ($con, "select SUM(t1.VALOR_VENDA_CAB) as 'vendas', SUM(t2.VALOR_VENDA_CAB) as 'vendas2' from
(SELECT @rank1 := @rank1+1  as id, VALOR_VENDA_CAB FROM venda_cabs WHERE DATA_VENDA_CAB Between '$DataInicio' and '$DataFim' ) as t1
left join
(SELECT @rank2 := @rank2+1  as id, VALOR_VENDA_CAB FROM venda_cabs WHERE DATA_VENDA_CAB Between '$DataInicio2' and '$DataFim2') t2 on t1.id = t2.id");

    $count = mysqli_num_rows($query);
  }
  global $count;
  global $query;
  include "../config.php";

  // Check user login or not
  if(!isset($_SESSION['uname'])){
      header('Location: ../login.php');
  }

  // logout
  if(isset($_POST['but_logout'])){
      session_destroy();
      header('Location: ../login.php');
  }

?>
<!DOCTYPE html>
<html lang='pt-br'>
    <header>
      <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
      <meta name="viewport" content="width=device-width, initial-scale=1"/>
      <title>Sigpet</title>

      <!-- CSS  -->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </header>
      <body>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">Funcionários</a></li>
          <li><a href="index.php?controller=ProdutosController&method=relProduto">Produtos</a></li>
          <li><a href="index.php?controller=FornecedoresController&method=RelFor">Fornecedores</a></li>
          <li><a href="index.php?controller=ClientesController&method=RelCliente">Clientes</a></li>
          <li><a href="index.php?controller=VendasController&method=RelVenda">Vendas</a></li>
          <li><a href="RelatorioEstaticoVenda.php">Comparativo</a></li>
          <li><a href="index.php?controller=VendasController&method=relatoriosvenda">Relativo de Vendas</a></li>
          <li><a href="RCVG.php">Gráfico Comparativo de Vendas</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="index.php?controller=ProdutosController&method=criar"><i class="material-icons">shopping_basket</i>Produtos</a></li>
          <li><a href="index.php?controller=ProdutosController&method=criar"><i class="material-icons">local_shipping</i>Fornecedores</a></li>
          <li><a href="index.php?controller=ClientesController&method=criar"><i class="material-icons">face</i>Clientes</a></li>
          <li><a href="index.php?controller=FuncionariosController&method=criar"><i class="material-icons">assignment_ind</i>Funcionários</a></li>
        </ul>
        <ul id="dropdown3" class="dropdown-content">
          <li><a href="index.php?controller=ProdutosController&method=listar"><i class="material-icons">shopping_basket</i>Produtos</a></li>
          <li><a href="index.php?controller=FornecedoresController&method=listar"><i class="material-icons">local_shipping</i>Fornecedores</a></li>
          <li><a href="index.php?controller=ClientesController&method=listar"><i class="material-icons">face</i>Clientes</a></li>
          <li><a href="index.php?controller=FuncionariosController&method=listar"><i class="material-icons">assignment_ind</i>Funcionários</a></li>
          <li><a href="index.php?controller=VendasController&method=listar"><i class="material-icons">local_grocery_store</i>Vendas</a></li>
        </ul>
        <form method='post' action="">
        <div class="navbar-fixed">
          <nav class="white" role="navigation">
            <div class="nav-wrapper container">
            <a href="../index.php" class="brand-logo"><i class="material-icons">pets</i></a>
            <ul class="right hide-on-med-and-down">
              <<li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Relatórios<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown2">Cadastrar<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown3">Relações<i class="material-icons right">arrow_drop_down</i></a></li>
              <li><input type="submit" class="waves-effect waves-teal btn-flat" value="sair" name="but_logout"></a></li>
            </ul>
            <ul id="nav-mobile" class="sidenav">
              <li><a href="#">Navbar Link</a></li>
            </ul>
            <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          </div>
        </nav>
      </div>
    </form>
        <div id="index-banner" class="parallax-container">
          <div class="section no-pad-bot">
            <div class="container">
              <br><br>
              <h1 class="header center teal-text text-lighten-2">Sigpet</h1>
              <div class="row center">
                <h5 class="header col s12 light"><b></b></h5>
              </div>
              <div class="row center">
                <a href="index.php?controller=VendasController&method=criar" class="waves-effect waves-light btn-large"><i class="material-icons right">local_grocery_store</i>Realizar venda</a>
              </div>
              <br><br>

            </div>
          </div>
          <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
        </div>
        <div class="container">
          <div class="section">
<h4>Comparativo entre períodos</h4>
<div class="container">
  <div class="section">
	<form method="post" action="?controller=VendasController&method=relestatico">
    <h7>Selecione o primeiro periodo</h7>
		<input type="date" name="DataInicio">
		<input type="date" name="DataFim">
    <p>
    <p>
    <h7>Selecione o segundo periodo</h7>
		<input type="date" name="DataInicio2">
		<input type="date" name="DataFim2">
    <p>
    <p>
    <h7>Digite a projecao do primeiro periodo</h7>
    <input type="text" class=" form-control col-sm-8" name="projecao1" id="projecao1">
    <h7>Digite a projecao do segundo periodo</h7>
    <input type="text" class=" form-control col-sm-8" name="projecao2" id="projecao2">
		<p>
			<input class="btn btn-success" type="submit" name="executar" value="executar">
		</p>
    <table class="highlight" style="top:40px;">
    <thead>
      <tr>
        <th>Período</th>
        <th>Vendas</th>
        <th>Projeção</th>
        <th>Realização da meta em %</th>
        <th>Diferença absoluta</th>

      </tr>
    </thead>
    <tbody>
    <?php
      if($count == "0")
      {
        echo '<h2>Pesquisa Invalida</h2>';
      }
      else{
          while($row = mysqli_fetch_array($query)){
            $result=$row['vendas'];
            $result2=$row['vendas2'];
            $output=$result;
            $output2=$result2;
            $meta1= $output /$projecao1;
            $metapercent1 = round((float)$meta1 * 100 ) . '%';
            $meta2= $output2 /$projecao2;
            $metapercent2 = round((float)$meta2 * 100 ) . '%';
            $diferencaV= ($output+$output2);
            $diferencaPro=  ($projecao1+$projecao2);
            $metaPro=$diferencaV /$diferencaPro;
            $metapercentPro = round((float)$metaPro * 100 ) . '%';
            ?>
            <tr>
              <td>Período 1</td>
              <td><?php echo $output;?> </td>
              <td><?php echo $projecao1;?> </td>
              <td><?php echo $metapercent1?> </td>
              <td><?php echo ($output-$projecao1);?> </td>
            </tr>
            <tr>
              <td>Período 2</td>
              <td><?php echo $output2;?> </td>
              <td><?php echo $projecao2;?> </td>
              <td><?php echo $metapercent2?> </td>
              <td><?php echo ($output2-$projecao2);?> </td>
            </tr>
            <tr>
              <td>Absoluto</td>
              <td><?php echo $diferencaV;?> </td>
              <td><?php echo $diferencaPro;?> </td>
              <td><?php echo $metapercentPro?> </td>
              <td><?php echo ($diferencaV-$diferencaPro);?> </td>
            </tr>
            <?php }
        } ?>
      </tbody>
    </table>
      </form>
 </div>
</div>
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="../js/jquery.mask.js"></script>
<script src="../js/materialize.js"></script>
<script src="../js/init.js"></script>
<script>$(".dropdown-trigger").dropdown();</script>
