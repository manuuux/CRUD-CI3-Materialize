<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CRUD - <?= $title?></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <style>
      body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
      }
      main {
          flex: 1 0 auto;
      }
    </style>
</head>
<body>
<header>
<nav>
<div class="nav-wrapper light-green">
  <a href="#!" class="brand-logo center">CRUD</a>
  <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
  <ul class="right hide-on-med-and-down">
    <li><a href="<?=base_url();?>crud/nuevo">Crear Nuevo</a></li>
    <li><a href="<?=base_url();?>crud/lista">Listar Todos</a></li>
  </ul>
  <ul class="side-nav" id="mobile-demo">
  <li><a href="<?=base_url();?>crud/nuevo">Crear Nuevo</a></li>
  <li><a href="<?=base_url();?>crud/lista">Listar Todos</a></li>
  </ul>
</div>
</nav>
</header>
<main>
<div class="container">