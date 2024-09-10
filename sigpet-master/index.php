<?php
include "config.php";

// Check user login or not
if(!isset($_SESSION['uname'])){
    header('Location: login.php');
}

// logout
if(isset($_POST['but_logout'])){
    session_destroy();
    header('Location: login.php');
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
      <link href="css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
      <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </header>
      <body>
        <ul id="dropdown1" class="dropdown-content">
          <li><a href="#!">Funcionários</a></li>
          <li><a href="view/index.php?controller=ProdutosController&method=relProduto">Produtos</a></li>
          <li><a href="view/index.php?controller=FornecedoresController&method=RelFor">Fornecedores</a></li>
          <li><a href="view/index.php?controller=ClientesController&method=RelCliente">Clientes</a></li>
          <li><a href="view/index.php?controller=VendasController&method=RelVenda">Vendas</a></li>
          <li><a href="view/RelatorioEstaticoVenda.php">Comparativo</a></li>
          <li><a href="view/index.php?controller=VendasController&method=relatoriosvenda">Relativo de Vendas</a></li>
          <li><a href="view/RCVG.php">Gráfico Comparativo de Vendas</a></li>
        </ul>
        <ul id="dropdown2" class="dropdown-content">
          <li><a href="view/index.php?controller=ProdutosController&method=criar"><i class="material-icons">shopping_basket</i>Produtos</a></li>
          <li><a href="view/index.php?controller=ProdutosController&method=criar"><i class="material-icons">local_shipping</i>Fornecedores</a></li>
          <li><a href="view/index.php?controller=ClientesController&method=criar"><i class="material-icons">face</i>Clientes</a></li>
          <li><a href="view/index.php?controller=FuncionariosController&method=criar"><i class="material-icons">assignment_ind</i>Funcionários</a></li>
        </ul>
        <ul id="dropdown3" class="dropdown-content">
          <li><a href="view/index.php?controller=ProdutosController&method=listar"><i class="material-icons">shopping_basket</i>Produtos</a></li>
          <li><a href="view/index.php?controller=FornecedoresController&method=listar"><i class="material-icons">local_shipping</i>Fornecedores</a></li>
          <li><a href="view/index.php?controller=ClientesController&method=listar"><i class="material-icons">face</i>Clientes</a></li>
          <li><a href="view/index.php?controller=FuncionariosController&method=listar"><i class="material-icons">assignment_ind</i>Funcionários</a></li>
          <li><a href="view/index.php?controller=VendasController&method=listar"><i class="material-icons">local_grocery_store</i>Vendas</a></li>
        </ul>
        <form method='post' action="">
        <div class="navbar-fixed">
          <nav class="white" role="navigation">
            <div class="nav-wrapper container">
            <a href="#" class="brand-logo"><i class="material-icons">pets</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a class="dropdown-trigger" href="#!" data-target="dropdown1">Relatórios<i class="material-icons right">arrow_drop_down</i></a></li>
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
                <a href="view/index.php?controller=VendasController&method=criar" class="waves-effect waves-light btn-large pulse"><i class="material-icons right">local_grocery_store</i>Realizar venda</a>
              </div>
              <br><br>

            </div>
          </div>
          <div class="parallax"><img src="background1.jpg" alt="Unsplashed background img 1"></div>
        </div>
        <div class="container">
          <div class="section">

            <!--   Icon Section   -->
            <div class="row">
              <div class="col s4 m4">
                <div class="card small">
        <div class="card-image">
          <img src="produtos.jpg">
          <span class="card-title white-text text-lighten-2">Produtos</span>
        </div>
        <div class="card-content">
          <p>Cadastrar um novo produto.</p>
        </div>
        <div class="card-action">
          <a href="view/index.php?controller=ProdutosController&method=criar">Cadastrar</a>
        </div>
      </div>
              </div>


              <div class="col s4 m4">
                <div class="card small">
        <div class="card-image">
          <img src="kitten-4257631_960_720.jpg">
          <span class="card-title white-text text-lighten-2">Clientes</span>
        </div>
        <div class="card-content">
          <p>Cadastrar um novo cliente</p>
        </div>
        <div class="card-action">
          <a href="view/index.php?controller=ClientesController&method=criar">Cadastrar</a>
        </div>
      </div>
              </div>

              <div class="col s4 m4">
                <div class="card small">
        <div class="card-image">
          <img src="document-3271743_960_720.jpg">
          <span class="card-title white-text text-lighten-2">Vendas</span>
        </div>
        <div class="card-content">
          <p>Relação de vendas realizadas</p>
        </div>
        <div class="card-action">
          <a href="view/index.php?controller=VendasController&method=listar">Relação de vendas</a>
        </div>
      </div>
              </div>
            </div>

          </div>
        </div>


        <div class="container">
          <div class="section">

            <div class="row">
              <div class="col s4 m4">
                <div class="card small">
        <div class="card-image">
          <img src="graficos.jpg">
          <span class="card-title white-text text-darken-0">Gráfico de vendas</span>
        </div>
        <div class="card-content">
          <p>Gráfico relacionado às vendas realizadas.</p>
        </div>
        <div class="card-action">
          <a href="view/RCVG.php">Visualizar</a>
        </div>
      </div>
              </div>


              <div class="col s4 m4">
                <div class="card small">
        <div class="card-image">
          <img src="office.jpg">
          <span class="card-title white-text text-lighten-2">Relatório de vendas</span>
        </div>
        <div class="card-content">
          <p>Relatório de vendas por Funcionário</p>
        </div>
        <div class="card-action">
          <a href="view/RelVendaPorVendedor.php">Relação por Funcionário</a>
        </div>
      </div>
              </div>

              <div class="col s4 m4">
                <div class="card small">
        <div class="card-image">
          <img src="business-3190209_1920.jpg">
          <span class="card-title white-text text-lighten-2">Relatório de vendas</span>
        </div>
        <div class="card-content">
          <p>Relatório de vendas por Data</p>
        </div>
        <div class="card-action">
          <a href="view/RelVendaPorVendedor.php">Relação por data</a>
        </div>
      </div>
              </div>
            </div>


          </div>
        </div>




        <footer class="page-footer teal">
          <div class="container">
            <div class="row">
              <div class="col l6 s12">
                <h5 class="white-text">Sigpet</h5>
                <p class="grey-text text-lighten-4">Projeto integrador II</p>


              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Configurações</h5>
                <ul>
                  <li><a class="white-text" href="https://github.com/ensinacomofaz/sigpet">Github</a></li>
                  <li><a class="white-text" href="https://dashboard.heroku.com/apps/sigpet">Heroku</a></li>
                </ul>
              </div>
              <div class="col l3 s12">
                <h5 class="white-text">Administrativo</h5>
                <ul>
                  <li><a class="white-text" href="view/index.php?controller=FuncionariosController&method=listar">Usuários</a></li>
                  <li><a class="white-text" href="view/index.php?controller=VendasController&method=listar">Vendas</a></li>
                  <li><a class="white-text" href="view/RelVendaPorVendedor.php">Performance</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="footer-copyright">
            <div class="container">
              <a class="brown-text text-lighten-3" href="http://uniceub.br">Uniceub</a>
            </div>
          </div>
        </footer>



        <script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
        <script src="js/materialize.js"></script>
        <script src="js/init.js"></script>
        <script>$(".dropdown-trigger").dropdown();</script>


    </body>
</html>
