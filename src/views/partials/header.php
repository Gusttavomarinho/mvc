<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <!--Import Google Icon Font-->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!--Import materialize.css-->
  <link type="text/css" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"  media="screen,projection"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> Meu CRUD em MVC</title>
</head>
<body>
<header>
<nav class="light-blue lighten-1" role="navigation">
    <div class="nav-wrapper container"><a id="logo-container" href="#" class="brand-logo"><?= isset($tpagina) ? $tpagina : 'Titulo da pagina ###'; ?></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="<?=$base?>">Link ?</a></li>
      </ul>

      <ul id="nav-mobile" class="sidenav">
        <li><a href="<?=$base?>">Link ?</a></li>
      </ul>
      <a href="<?=$base?>" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
    </div>
  </nav>
  <br/>
</header>


    
