<?php 
$conexao = null;



?>
<script type="text/javascript">	
	function visualizar(ID) {
		location.href="detalhes.php?ID="+ID;
	}
</script>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/style.css">
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script> 
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/roboto.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/material-fullpalette.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-material-design/0.3.0/css/ripples.min.css">
	<script src="dist/sweetalert.js"></script>
	<link rel="stylesheet" href="dist/sweetalert.css">
	<title>Boomerang|Pediu ta na mão</title>
</head>
<body>
	<nav class="navbar navbar-default" style="background-color: #ffa07a;margin-bottom: 0px;">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="#">
					<!-- <img style="width: 50%;" alt="Brand" src="css/imagens/logo.png"> -->
				</a>
			</div>
		</div>
	</nav>
	<div class="col-sm-offset-2 col-sm-8 col-md-offset-2 col-md-8">
		<div class="thumbnail" style="background-image: url(fotos/panda.jpg);"></div>
	</div>
	<div class="col-sm-offset-1 col-sm-10 col-md-offset-1 col-md-10">
	
		<div class="number_one">
			<div class="lado_esquerdo">
				<h1 class="title_text">Lorem ipsum dolor sit amet</h1>
				<h2 class="title_descris">Vivamus neque odio, rhoncus sit amet ipsum ut, porttitor fermentum lorem. Donec ultricies, risus ut blandit fringilla, ante lectus hendrerit ex, vel viverra odio erat sit amet lorem.</h2>
			</div>
			<div class="lado_direito">
				<iframe width="450" height="315" src="https://www.youtube.com/embed/HL1UzIK-flA?list=RDEMaFGiAZ4Nb5ktVatP3wi-Dw" frameborder="0" allowfullscreen></iframe>
			</div>
		</div>
		<div class="number_two">

			<div class="lado_esquerdo">
				<iframe width="450" height="315" src="https://www.youtube.com/embed/HL1UzIK-flA?list=RDEMaFGiAZ4Nb5ktVatP3wi-Dw" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="lado_direito">
				<h1 class="title_text">Lorem ipsum dolor sit amet</h1>
				<h2 class="title_descris">Vivamus neque odio, rhoncus sit amet ipsum ut, porttitor fermentum lorem. Donec ultricies, risus ut blandit fringilla, ante lectus hendrerit ex, vel viverra odio erat sit amet lorem.</h2>
			</div>
			
		</div>
		<div class="number_three">

			<div class="lado_esquerdo">
				<h1 class="title_text">Lorem ipsum dolor sit amet</h1>
				<h2 class="title_descris">Vivamus neque odio, rhoncus sit amet ipsum ut, porttitor fermentum lorem. Donec ultricies, risus ut blandit fringilla, ante lectus hendrerit ex, vel viverra odio erat sit amet lorem.</h2>
			</div>
			<div class="lado_direito">
				<iframe width="450" height="315" src="https://www.youtube.com/embed/HL1UzIK-flA?list=RDEMaFGiAZ4Nb5ktVatP3wi-Dw" frameborder="0" allowfullscreen></iframe>
			</div>
			
		</div>
	</div>	
	<?php $conexao= null;?> 
</body>
</html>