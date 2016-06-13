<!DOCTYPE html>

<html>

	<head>
		<title>Pagina Inicial - Cabelos</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="mdl/material.red-orange.min.css" />
		<link rel="stylesheet" href="css/cabelo.css" />
		<script defer src="mdl/material.min.js"></script>
		<link rel="stylesheet" href="css/estilo.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>

	<body>
	    <style>
            .demo-layout-transparent {
              
              background: -webkit-linear-gradient(-90deg, rgba(255,255,255,0.01) 0, rgba(255,91,10,0.51) 100%), url('../imagens/cabelo.jpg') center / cover;
        	  background: -moz-linear-gradient(180deg, rgba(255,255,255,0.01) 0, rgba(255,91,10,0.51) 100%), url('../imagens/cabelo.jpg') center / cover;
        	  background: linear-gradient(180deg, rgba(255,255,255,0.01) 0, rgba(255,91,10,0.51) 100%), url('../imagens/cabelo.jpg') center / cover;
            }
            .demo-layout-transparent .mdl-layout__header,
            .demo-layout-transparent .mdl-layout__drawer-button, .mdl-navigation .mdl-navigation__link {
              /* This background is dark, so we set text to white. Use 87% black instead if
                 your background is light. */
              color: rgba(0,0,0,0.87);
            }
        </style>
        
		<div class="demo-layout-transparent mdl-layout mdl-js-layout">
          <header class="mdl-layout__header mdl-layout__header--transparent">
            <div class="mdl-layout__header-row">
              <!-- Title -->
              <span class="mdl-layout-title">Title</span>
              <!-- Add spacer, to align navigation to the right -->
              <div class="mdl-layout-spacer"></div>
              <!-- Navigation -->
              <nav class="mdl-navigation">
                <a class="mdl-navigation__link" href="catalogo.php">Cátalogo</a>
                <a class="mdl-navigation__link" href="agendamento.php">Agendamento</a>
                <a class="mdl-navigation__link" href="sobre.php">Sobre</a>
              </nav>
            </div>
          </header>
          
	</body>
</html>
