<!DOCTYPE html>
<html>
    
<head>
    <title>Catálogo - Cabelos</title>
    <meta charset="UTF-8">		
    <link rel="stylesheet" href="css/catalogo.css" />
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
            background-size: cover;
            top: 0;
            left: 0;
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
        
            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <div class="mdl-tabs__tab-bar">
                    <a href="#cortes" class="mdl-tabs__tab is-active">Cortes</a>
                    <a href="#coloracao" class="mdl-tabs__tab">Coloração</a>
                    <a href="#hidratacao" class="mdl-tabs__tab">Hidratação</a>
                </div>

            <div class="mdl-grid">
                <div class="mdl-tabs__panel is-active" id="cortes">
                    <?php include("catalogo/cortes.html"); ?>
                </div>

                <div class="mdl-tabs__panel" id="coloracao">
                    <?php include("catalogo/coloracao.html"); ?>
                </div>

                <div class="mdl-tabs__panel" id="hidratacao">
                    <?php include("catalogo/hidratacao.html"); ?>
                </div>
            </div>
        </div>
        
        <footer class="mdl-mini-footer">
            <?php
            include("footer.html");
            ?>
        </footer>

    </div>
    
</body>
</html>
