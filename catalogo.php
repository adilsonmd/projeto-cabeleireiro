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
                <a href="#" class="mdl-navigation__link">Cortes</a>
                <a href="#" class="mdl-navigation__link">Coloração</a>
                <a href="#" class="mdl-navigation__link">Alisamento</a>
                <a href="#" class="mdl-navigation__link">Hidratação</a>
            </nav>
        </div>

        
            <div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
                <div class="mdl-tabs__tab-bar">
                    <a href="#cortes" class="mdl-tabs__tab is-active">Cortes</a>
                    <a href="#coloracao" class="mdl-tabs__tab">Coloração</a>
                    <a href="#alisamento" class="mdl-tabs__tab">Alisamento</a>
                    <a href="#hidratacao" class="mdl-tabs__tab">Hidratação</a>
                </div>

            <div class="mdl-grid">
                <div class="mdl-tabs__panel is-active" id="cortes">
                     <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte1.jpg" id="img1">
                <ul>
                    <li>
                        <a href="#"><span class="tip">Corte 1 - massa.</span>
                        </a>
                    </li>
                </ul>
            </div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte2.jpg" id="img1">
                <ul>
                    <li>
                        <a href="#"><span class="tip">Corte 2 - massa.</span>
                        </a>
                    </li>
                </ul>
            </div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte3.jpg" id="img1">
                <ul>
                    <li>
                        <a href="#"><span class="tip">Corte 3 - massa.</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->

        </div>

        <div class="mdl-grid">
            <div class="mdl-cell mdl-cell--2-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte4.jpg" id="img1">
                <ul>
                    <li>
                        <a href="#"><span class="tip">Corte 4 - massa.</span>
                        </a>
                    </li>
                </ul>
            </div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte5.jpg" id="img1">
                <ul>
                    <li>
                        <a href="#"><span class="tip">Corte 5 - hm.</span>
                        </a>
                    </li>
                </ul>
            </div>
                
            <div class="mdl-cell mdl-cell--3-col-desktop img-cell"><img class="attachment-thumbnail wp-post-image" src="imagens/catalogo/corte6.jpg" id="img1">
                <ul>
                    <li>
                        <a href="#"><span class="tip">Corte 6 - massa.</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="mdl-cell mdl-cell--1-col-desktop mdl-cell--hide-phone mdl-cell--hide-tablet"></div> <!-- Espaçamento -->

        </div>
                </div>
                <div class="mdl-tabs__panel" id="coloracao">
                    <ul>
                    <li>Tywin</li>
                    <li>Cersei</li>
                    <li>Jamie</li>
                    <li>Tyrion</li>
                    </ul>
                </div>
                <div class="mdl-tabs__panel" id="alisamento">
                    <ul>
                    <li>Viserys</li>
                    <li>Daenerys</li>
                    </ul>
                </div>
                <div class="mdl-tabs__panel" id="hidratacao">

                    
                </div>
            </div>
        </div>
        
       <?php
        include("footer.html");
        ?>
    </div>
    
</body>
</html>