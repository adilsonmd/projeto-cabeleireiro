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
        
        .mdl-cell {
            box-sizing: border-box;
            background-color: #fcfcfc;
            height: 100px;
            padding-left: 8px;
            padding-top: 4px;
            color: black;
        }
        .mdl-grid:first-of-type .mdl-cell {
            height: 50px;
        }
        .img-cell{
           background-color: #ccc;
           color: white; 
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
                <a href="#" class="mdl-navigation__link">Cortes</a>
                <a href="#" class="mdl-navigation__link">Hidratação</a>
                <a href="#" class="mdl-navigation__link">Alisamento</a>
                <a href="#" class="mdl-navigation__link">Coloração</a>
            </nav>
        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone"></div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell">imagem <!-- conteúdo --></div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell">imagem</div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell">imagem</div> <!-- Espaçamento -->

            <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone"></div>
        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone"></div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell">imagem <!-- conteúdo --></div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell">imagem</div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell">imagem</div> <!-- Espaçamento -->

            <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone"></div>
        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone"></div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell">imagem <!-- conteúdo --></div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell">imagem</div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell">imagem</div> <!-- Espaçamento -->

            <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone"></div>
        </div>
        
       <?php
        include("footer.html");
        ?>
    </div>
    
</body>
</html>
