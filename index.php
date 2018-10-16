<!doctype html>
<html lang="pt">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="./css/fontawesome/css/all.css">
    <link rel="stylesheet" href="./css/particular/index.css">
    <title>VENDAS | HOME</title>
  </head>
  <body>
    <div class="container">
      <div class="btn-group drop_menu">
        <button type="button" class="btn btn-secondary dropdown-toggle btn_user" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user fa"></i><span style="margin-left: 10px;">DANIEL</span>
        </button>
        <div class="dropdown-menu dropdown-menu-right">
          <button class="dropdown-item" type="button"><i class="fas fa-cog fa"></i><span style="margin-left: 10px;">Configurações</span></button>
          <button class="dropdown-item" type="button"><i class="fas fa-user-circle"></i><span style="margin-left: 10px;">Conta</span></button>
          <div class="dropdown-divider"></div>
          <button class="dropdown-item" type="button"><i class="fas fa-sign-out-alt"></i><span style="margin-left: 10px;">Sair</span></button>
        </div>
      </div>
      <section class="body-application">
        <!-- navbar superior -->
        <header>
          <nav>
            <h5>CONTROLE DE VENDAS</h5>
          </nav>
        </header>

      </section>


      <!-- sidenav lateral -->
      <div class="side">
        <i class="fas fa-2x fa-border fa-bars"></i>
        <ul class="sidenav toggle-class">
          <li class="home selected">
            <i class="fas fa-home fa-2x"></i>
            <span>Página Inicial</span>
          </li>
          <li class="vendas">
            <i class="fas fa-shopping-cart fa-2x"></i>
            <span>Vendas</span>
          </li>
          <li class="clientes">
            <i class="fas fa-user-alt fa-2x"></i>
            <span>Clientes</span>
          </li>
          <li class="produtos">
            <i class="fab fa-product-hunt fa-2x"></i>
            <span>Produtos</span>
          </li>
          <li class="caixa">
            <i class="fas fa-file-invoice-dollar fa-2x"></i>
            <span>Caixa</span>
          </li>
          <li class="suporte">
            <i class="fas fa-headset fa-2x"></i>
            <span>Suporte Técnico</span>
          </li>
        </ul>
      </div>


      <div class="content-elements">
        <div class="home-body">
          <?php include 'partials/_home.php';?>
        </div>
        <div class="vendas-body">
          <?php include 'partials/_vendas.php';?>
        </div>
        <div class="clientes-body">
          <?php include 'partials/_clientes.php';?>
        </div>
        <div class="produtos-body">
          <?php include 'partials/_produtos.php';?>
        </div>
        <div class="caixa-body">
          <?php include 'partials/_caixa.php';?>
        </div>
        <div class="suporte-body">
          <?php include 'partials/_suporte.php';?>
        </div>
      </div>
    </div>

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="./js/jquery-3.3.1.min.js" ></script>
    <script src="./js/popper.min.js" ></script>
    <script src="./js/bootstrap.min.js" ></script>
    <script src="./js/particular/script.js" ></script>
  </body>
</html>