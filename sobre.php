<!DOCTYPE html>

<html>

    <head>
        <title>Sobre nós - Cabelos</title>
        <meta charset="UTF-8">
		
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
        <link rel="stylesheet" href="mdl/material.red-orange.min.css" />
        <script defer src="mdl/material.min.js"></script>
        <link rel="stylesheet" href="css/estilo.css" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            #div-img-loja {
                float: right;
            }
            #img-loja {
                size: 30%;
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

            <div class="mdl-grid">
                <div class="mdl-cell mdl-cell--2-col-desktop"></div> <!-- Espaçamento -->
                
                <div id="content" class="mdl-cell mdl-cell--8-col mdl-layout__content"> <!-- conteúdo -->
                    <h3 class="mdl-layout__title">Conheça a gente!</h3>
                    <ul class="mdl-list">
                        <li class="mdl-list__item">Telefone: (13) 3482-8123</li>
                        <li class="mdl-list__item">Facebook: <a href="#" class="">Cabelos</a></li>
                        <li class="mdl-list__item">WhatsApp: (13) 98853-4512</li>
                    </ul>
                    <div id="div-img-loja">
                        <img src="imagens/loja.jpg" alt="loja" id="img-loja"/>
                    </div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3646.089079054121!2d-46.32519908483111!3d-23.957289982217844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce03a0c9fb6053%3A0x46ee11fc8292f606!2sAv.+Conselheiro+N%C3%A9bias%2C+536+-+Paquet%C3%A1%2C+Santos+-+SP%2C+11015-001!5e0!3m2!1spt-BR!2sbr!4v1465238600691" width="720" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
                </div>
                
                <div class="mdl-cell mdl-cell--2-col-desktop"></div> <!-- Espaçamento -->
            </div>

            <?php
                include("footer.html");
            ?>
        </div>
        
    </body>
</html>
