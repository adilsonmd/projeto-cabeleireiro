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
                color: #545859;
            }
            .mdl-navigation__link, .mdl-layout-title {
                font-weight: 600;
                color: #545859;
                font-size: 24px;
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
                margin-left: auto;
                margin-right: auto;
            	margin-top: 50px;
                margin-bottom: 30px;
            	letter-spacing: -3px;
            	display: block;
            }
            form {
                margin: 0 auto 0 auto;
            }
            .mdl-button {
                text-transform: capitalize;
                font-weight: 600;
                font-size: 16px;
                margin: 0 auto;
            }
        </style>
        
		<div class="demo-layout-transparent mdl-layout mdl-js-layout mdl-layout--fixed-header">
          <header class="mdl-layout__header mdl-layout__header--transparent">
            <div class="mdl-layout__header-row">
              <!-- Title -->
              <div class="mdl-layout-title">Cutlist</div>
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
                <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div>

                <div class="mdl-cell mdl-cell--2-col">
                    <form action="catalogo.php">
                        <button class="mdl-button mdl-js-button mdl-button--raised mdl-button--colored">Começar</button>
                    </form>
                </div>

                <div class="mdl-cell mdl-cell--5-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div>
            </div>
          </main>
	</body>
</html>
