
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.0.1">
    <title>App Depressão</title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="apple-touch-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/apple-touch-icon.png" sizes="180x180">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon-16x16.png" sizes="16x16" type="image/png">
    <link rel="manifest" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/manifest.json">
    <link rel="mask-icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/safari-pinned-tab.svg" color="#563d7c">
    <link rel="icon" href="https://getbootstrap.com/docs/4.5/assets/img/favicons/favicon.ico">
    <meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
    <meta name="theme-color" content="#563d7c">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    <!-- Custom styles for this template -->
    <link href="https://getbootstrap.com/docs/4.5/examples/sign-in/signin.css" rel="stylesheet">
  </head>
  <body class="text-center">
    <form class="form-signin" method="POST" action="<?php echo site_url('login/'); ?>" enctype="multipart/form-data">
      <img class="mb-4" src="#" alt="" width="72" height="72">
      <h1 class="h3 mb-3 font-weight-normal">App Depressão</h1>
      <label for="inputEmail" class="sr-only">E-mail</label>
      <input type="email" id="inputEmail" name="inputEmail" class="form-control" placeholder="E-mail" required autofocus>
      <label for="inputPassword" class="sr-only">Senha</label>
      <input type="password" id="inputPassword" name="inputPassword" class="form-control" placeholder="Senha" required>
      <div class="checkbox mb-3">
        <!-- <label>
          <input type="checkbox" value="remember-me"> Remember me
        </label> -->
      </div>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>
      <p class="mt-5 mb-3 text-muted">
      E-mail: admin@appdepressao.16mb.com
      Senha: admin
      </p>
    </form>
  </body>
</html>
