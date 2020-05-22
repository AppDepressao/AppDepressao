<!doctype html>
<html>
<head>
    <title>Home</title>
    <script src="<?php echo base_url('../Content/jQuery/jquery-3.5.1.min.js')?>"></script>
    <script src="<?php echo base_url('../Content/popper/popper.min.js')?>"></script>
    <script src="<?php echo base_url('../Content/bootstrap-4.5.0-dist/js/bootstrap.min.js')?>"></script>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('../Content/bootstrap-4.5.0-dist/css/bootstrap.min.css')?>"></link>
    <link type="text/css" rel="stylesheet" href="<?php echo base_url('../Content/appStyle/style.css')?>"></link>
</head>
<body id="page-top">
    <section class="main-nav nav-side">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary fixed-top" id="sideNav">
            <a class="navbar-brand" href="#page-top">
            <span class="d-block d-lg-none">
                <img class="img-logo-sm" src="../Content/images/logo_ucs.png" alt="">
            </span>
            <span class="d-none d-lg-block">
                <img class="img-logo-lg" src="../Content/images/logo_ucs.png" alt="">
            </span>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav">
                <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#dashboard">Dashboard</a>
                </li>
                <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#novo_questionario">Novo Questionário</a>
                </li>
                <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#historico">Meu Histórico</a>
                </li>
                <li class="nav-item">
                <a class="nav-link js-scroll-trigger" href="#estatistica">Estatística</a>
                </li>
            </ul>
            </div>
        </nav>
    </section>

    <section class="main-nav">
      <nav class="navbar navbar-expand-lg navbar-light">
        
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <span><h4>Seja Bem-vindo ao DepressApp</h4></span>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1"> El Fulano <img class="img-perfil-sm" src="../Content/images/icon-user-default.png" alt=""></a>
                    
                </li>
            </ul>
        </div>
        </nav>
    </section>

    <?= $this->renderSection('content') ?>
</body>
</html>