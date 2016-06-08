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

		<script>
		
		var options =  {onKeyPress: function(tel, e, field, options){
			var masks = ['(00)0000-0000'];
			$('#telefonep').mask(masks, options);
		}};

		$('#telefone').mask('(00)0000-0000', options);
		
		</script>

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

					<h3 class="mdl-layout__title">Marque um horário</h3>
					<form action="" method="GET">
						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="text" id="user" pattern="[A-Z,a-z, ]*">
							<label class="mdl-textfield__label" for="user">Seu nome</label>
							<span class="mdl-textfield__error">Apenas letras e espaço</span>
						</div>

						<div class="mdl-textfield mdl-js-textfield">
							<input class="mdl-textfield__input" type="text" id="telefone" pattern="[\(]\d{2}[\)]\d{4}[\-]\d{4}">
							<label class="mdl-textfield__label" for="user">Seu telefone</label>
							<span class="mdl-textfield__error">Preencha corretamente</span>
						</div>
						<br>
						
						<button type="submit" class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--colored">
							Agendar
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