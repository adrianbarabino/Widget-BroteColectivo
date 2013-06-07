<?php

$referencia = $_GET['ref'];

?><!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Widget Agenda Cultural - Brote Colectivo</title>
	<link href='http://fonts.googleapis.com/css?family=Droid+Sans|Open+Sans' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" href="css/widget.css" />
	<style>
	</style>

</head>
<body>
	<script>
	<?php

		if($referencia){
			if($referencia == "diarionuevodia"){
			echo "console.log('Widget de Brote Colectivo cargado desde Diario El Nuevo Dia');";
			}else{	
			echo "console.log('Widget de Brote Colectivo cargado.');";
			}
		}

	?>
	  
	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new 
	Date();a=s.createElement(o),
	  
	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  
	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-36574161-2', 'brotecolectivo.com');
	  ga('send', 'pageview');

	</script>	
	<header>
		<figure class="logo-brote">
			<img src="/logos/blanco.png" alt="">
		</figure>
		<section class="titulo">
			<h2>agenda cultural</h2>
		</section>
	</header>
	<section class="contenedor">
		<div id="cargando">
			Cargando, por favor espere...
		</div>
		<ul>
			
		</ul>
	</section>
	<footer>
		<span>Servicio de agenda cultural por BroteColectivo.com</span>
	</footer>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
	<script type="text/template" id="lista">
			<% _.each(json_data, function(evento) { %>
			<li>
				<article id="<% print(evento.id); %>">
					<a href="http://www.brotecolectivo.com/agenda-cultural/<% print(evento.urltag); %>" target="_blank">
						<section class="info-evento">
							<h3>
								<% print(evento.fecha_corta); %> - <% print(evento.titulo); %>
							</h3>
							<span>
								<% print(evento.lugar); %> - <% print(evento.ciudad); %>
							</span>
						</section>
					</a>
				</article>
			</li>
			<% }); %>
	</script>
  	<script type="text/javascript" src="/js/underscore.min.js"></script>
  	<script type="text/javascript" src="/js/widget.js"></script>
</body>
</html>
