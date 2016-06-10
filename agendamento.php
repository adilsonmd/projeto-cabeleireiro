<!DOCTYPE html>

<html>

	<head>
		<title>Agendamento - Cabelos</title>
		<meta charset="UTF-8">
		
		<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
		<link rel="stylesheet" href="mdl/material.red-orange.min.css" />
		<script defer src="mdl/material.min.js"></script>
		<link rel="stylesheet" href="css/estilo.css" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<script src="js/jquery.mask.js"></script>
    	<link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    	<script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
    	<script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>
		
		<script>
		
		var options =  {onKeyPress: function(tel, e, field, options){
			var masks = ['(00)00000-0000'];
			$('#telefonep').mask(masks, options);
		}};

		$('#telefone').mask('(00)00000-0000', options);
		
		</script>
		
		<!--
		<script>
			var horarios = ['8:00', '9:00', '10:00', '11:00', '12:00', '13:00', '14:00', '15:00', '16:00', '17:00', '18:00', '19:00'];
			
			jQuery(function ($) {
				$("#comboHorario").shieldComboBox({
					dataSource: {
						data: horarios
					},
					autoComplete: {
						enabled: true
					}
				});
			});
		</script>
		-->
		<style>
			#info {
				float: right;
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
				<div class="mdl-cell mdl-cell--2-col"></div> <!-- Espaçamento -->
				
				<div id="content" class="mdl-cell mdl-cell--8-col mdl-layout__content"> <!-- Conteúdo -->
						<!-- Tooltip -->
						<div id="info" class="icon material-icons">help_outline</div>
						<div class="mdl-tooltip mdl-tooltip--large mdl-tooltip--left" for="info">
							Ligaremos para você para confirmar a visita 1 dia antes
						</div>
						<!-- =/= -->
					<h3 class="mdl-layout__title">Marque um horário</h3>
						
					<form action="agenda_sucesso.php" method="GET">
						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="text" name="nome" id="user" pattern="[A-Z,a-z, ]*">
							<label class="mdl-textfield__label" for="user">Seu nome</label>
							<span class="mdl-textfield__error">Apenas letras e espaço</span>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="text" name="tel" id="telefone" pattern="[\(]\d{2}[\)]\d{5}[\-]\d{4}">
							<label class="mdl-textfield__label" for="telefone">Seu telefone</label>
							<span class="mdl-textfield__error">Preencha corretamente</span>
						</div>
						<br>
						<div class="">
							<label for="calendario">Escolha uma data</label>
							<input type="date" name="calendario" min="01/01/2016" max="31/12/2020" id="calendario"/>
						</div>
						<br>

						<div class="">
							<select>
								<option>8:00</option>
								<option>9:00</option>
								<option>10:00</option>
								<option>11:00</option>
								<option>12:00</option>
								<option>13:00</option>
								<option>14:00</option>
								<option>15:00</option>
								<option>16:00</option>
								<option>17:00</option>
								<option>18:00</option>
								<option>19:00</option>
							</select>	
							
						</div>
						<br>

						<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
							Continuar
						</button>
					</form>
				</div>

				<div class="mdl-cell mdl-cell--2-col"></div> <!-- Espaçamento -->
			</div>

			<?php
            include("footer.html");
			?>
		</div>
		
	</body>
</html>
<!--
    <link id="themecss" rel="stylesheet" type="text/css" href="//www.shieldui.com/shared/components/latest/css/light/all.min.css" />
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="//www.shieldui.com/shared/components/latest/js/shieldui-all.min.js"></script>

        <div class="innerDiv">
            <label for="comboBoxTech">Select technology</label>
            <br />
            <input id="comboBoxTech" />
            <br />
        </div>
</div>
<script type="text/javascript">
    var technologies = ['ASP.NET', 'WPF', 'WCF', 'Java', 'J2EE', 'JavaScript', 'JQuery', 'ActionScript', 'OpenGL', 'PHP'];
    var years = ['1', '2', '3', '4', '5', '7', '10', '12', '15', '20', '28'];
    jQuery(function ($) {
        $("#comboBoxTech").shieldComboBox({
            dataSource: {
                data: technologies
            },
            autoComplete: {
                enabled: true
            }
        });
        $("#comboBoxYears").shieldComboBox({
            dataSource: {
                data: years
            }
        });
        $("#submit").shieldButton({
            events: {
                click: function () {
                    var technology = $("#comboBoxTech").swidget().value();
                    var years = $("#comboBoxYears").swidget().value();
                    alert("You selected: \n Technology: " + technology + "\n Years: " + years);
                }
            }
        });
    });
</script>
<style>
    .outerDiv
    {
        max-width: 600px;
        content: ".";
        display: block;
        overflow: hidden;
        margin-left: auto;
        margin-right: auto;
    }
    .innerDiv
    {
        display: inline-block;
        margin: 10px;
    }
    .innerDiv label
    {
        font-style: italic;
        font-size: 1.1em;
    }
    .imageDiv
    {
        display: inline-block;
        max-width: 300px;
        margin: 10px;
    }
    .innerDiv .sui-combobox
    {
        font-family: Arial, sans-serif;
        font-size: 14px;
        margin-bottom: 10px;
    }
</style>
</body>
</html>
-->