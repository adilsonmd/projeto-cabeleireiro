<!DOCTYPE html>
<html>
    
<head>
    <title>Catálogo - Cabelos</title>
    <meta charset="UTF-8">		
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="mdl/material.red-orange.min.css" />
    <script defer src="mdl/material.min.js"></script>
    <link rel="stylesheet" href="css/estilo.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
        .mdl-cell, img {
            box-sizing: border-box;
            background-color: #fcfcfc;
            height: 210px;
            padding-left: 8px;
            padding-top: 4px;
            color: black;
        }
        .mdl-grid:first-of-type .mdl-cell {
            height: 210px;
        }
        .img-cell{
           background-color: transparent;
           color: white; 
           
        }
        img { 
            padding: 0;
        }
        #img1 {

            background-repeat: no-repeat;
            background-size: inherit;
            background-position: center;
        }
    </style>
</head>

<body>
    <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
        <header class="mdl-layout__header">
            <?php 
            include("menu.php");
            ?>    
        </header>
        <div class="mdl-layout__drawer">
            <span class="mdl-layout-title">Categorias</span>
            <nav class="mdl-navigation">
                <a href="#" class="mdl-navigation__link" onclick="pag()">Cortes</a>
                <a href="#" class="mdl-navigation__link">Hidratação</a>
                <a href="#" class="mdl-navigation__link">Alisamento</a>
                <a href="#" class="mdl-navigation__link">Coloração</a>
            </nav>
        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte1.jpg" id="img1">
                <span>Corte 1 - nice.</span>
            </div>
            
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img src="imagens/catalogo/corte1.jpg" id="img1" ><!-- conteúdo --></div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte2.jpg" id="img1">
                <span>Corte 2 - pika.</span>
            </div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte3.jpg" id="img1">
                <span>Corte 3 - zika.</span>
            </div>

            <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->

        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte4.jpg" id="img1">
                <span>Corte 4 - massa.</span>
            </div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte5.jpg" id="img1">
                <span>Corte 5 - trem bão.</span>
            </div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte6.jpg" id="img1">
                <span>Corte 6 - bacana.</span>
            </div>

            <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->

        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--4-col-desktop img-cell"> <!-- conteúdo --></div>
                
            <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--4-col-desktop img-cell"></div> <!-- Espaçamento -->

            <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->

        </div>
        
       <?php
        include("footer.html");
        ?>
    </div>
    
</body>
</html>