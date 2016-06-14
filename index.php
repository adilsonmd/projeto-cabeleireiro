<!DOCTYPE html>

<html>

	<head>
		<title>Pagina Inicial - Cabelos</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="mdl/material.red-orange.min.css" />
		<script defer src="mdl/material.min.js"></script>
		<link rel="stylesheet" href="css/estilo.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">

	</head>

	<body>
	    <style>
            .demo-layout-transparent {
                background: -webkit-linear-gradient(-90deg, rgba(255,255,255,0.01) 0, rgba(255,34,10,0.51) 100%), url('../imagens/cabelo.jpg') center / cover;
        	    background: -moz-linear-gradient(180deg, rgba(255,255,255,0.01) 0, rgba(255,34,10,0.51) 100%), url('../imagens/cabelo.jpg') center / cover;
        	    background: linear-gradient(180deg, rgba(255,255,255,0.01) 0, rgba(255,34,10,0.51) 100%), url('../imagens/cabelo.jpg') center / cover;
            }
            .demo-layout-transparent .mdl-layout__header,
            .demo-layout-transparent .mdl-layout__drawer-button, .mdl-navigation .mdl-navigation__link {
              /* This background is dark, so we set text to white. Use 87% black instead if
                 your background is light. */
                color: rgba(0,0,0,0.87);
            }
            .mdl-navigation__link {
                font-weight: 500;
                font-size: 16px;
            }
            .mdl-layout-title {
                background-image: url("imagens/capa.png");
                background-size: auto;
                background-repeat: no-repeat;
            }
            .mdl-layout__content, .title-jumbo {
            	font-weight: 900;
            	border: none;
            	font-family: Helvetica, Arial, sans-serif;
            	font-size: 64px;
            	line-height: 1.2;
            	color: white;
            	background: transparent;
            	text-align: center;
            	margin: 50px auto 0 30px;
            	letter-spacing: -3px;
            	display: block;
            }
            form {
                margin: 0 auto 0 auto;
                position: absolute;
                left: 45%;
            }
            .mdl-button {
                text-transform: capitalize;
                font-weight: 600;
                font-size: 16px;
            }
        </style>
        
		<div class="demo-layout-transparent mdl-layout mdl-js-layout mdl-layout--fixed-header">
          <header class="mdl-layout__header mdl-layout__header--transparent">
            <div class="mdl-layout__header-row">
              <!-- Title -->
              <div class="mdl-layout-title"></div>
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
          <main>
  		    <div class="mdl-grid">

                <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div>

                <div class="mdl-cell mdl-cell--8-col-desktop">
                    <h2 class="title-jumbo">Catálogo e agendamento, em um só lugar.</h2>
                </div>

                <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div>

            </div>

            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div>

                <div class="mdl-cell mdl-cell--2-col-desktop">
                    <form action="catalogo.php">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Começar</button>
                    </form>
                </div>

                <div class="mdl-cell mdl-cell--4-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div>
            </div>
          </main>
	</body>
</html>
