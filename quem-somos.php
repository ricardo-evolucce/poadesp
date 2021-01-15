<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<!--fonts google-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@600;800&display=swap" rel="stylesheet">



	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/social-icons.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--social icons-->
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>

<body>
		<?php include('includes/header.php'); ?>



	<section class="container jumbotron">


		<div class="row">
			

			<div class="col-5 col-md-5">
				<img src="img/predio.jpg" class="img-fluid rounded">
			</div>


			<div class="col-7 col-md-7"><h1 class="display-4">Quem somos</h1> 
				<p class="lead texto-cinza">
Com quase vinte anos de experiência, nosso escritório de assessoria técnica de documentos de veículos soluciona a viabilização de documentação em todo país</p>

<p class="lead texto-cinza">

PoaDesp está localizado em Porto Alegre, RS.

</p>
			<a class="btn btn-primary btn-lg botao" href="https://goo.gl/maps/gztMtRZ5veicynyw7" role="button">Veja como chegar</a>
			
			</div>

		</div>
	<div class="row pt-4">

				<div class="col-12">
				<p class="lead texto-cinza">
Para aperfeiçoar e agregar valores aos serviços prestados, contamos com uma equipe formada por profissionais altamente qualificados e acompanhamos as inovações tecnológicas, o que resulta em soluções inovadoras, agilidade e clientes satisfeitos.

</p>
				<hr class="my-4 cor-laranja">
				<p class="texto-cinza">Para maiores informações, entre em contato via Whatsapp</p>
				<a class="btn btn-primary btn-lg botao" href="#" role="button">Contato via Whatsapp</a>
			</div>



	</section>




	<footer>
		<div class="container-fluid logo-redes">
			<div class="row align-items-center">
				<div class="col col-md-3 offset-md-1">
					<img src="img/logo.jpg" class="img-fluid">
				</div>



				<div class="col col-md-4 offset-md-4 text-center ">
					<a href="#" class="fa fa-whatsapp" style="font-size:25px;"></a>
					<a href="#" class="fa fa-facebook" style="font-size:25px;"></a>
					<a href="#" class="fa fa-instagram" style="font-size:25px;"></a>
					
				</div>

			</div>
		</div>
	</footer>





	<script src="jquery/jquery-3.5.1.min.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript">$('.carousel').carousel({
		interval: 3000
	})</script>

	<script type="text/javascript">
		$(document).ready(function(){
			$(window).scroll(function () {
				if ($(this).scrollTop() > 50) {
					$('#back-to-top').fadeIn();
				} else {
					$('#back-to-top').fadeOut();
				}
			});
		// scroll body to 0px on click
		$('#back-to-top').click(function () {
			$('body,html').animate({
				scrollTop: 0
			}, 400);
			return false;
		});
	});
</script>


<!--<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fa fa-chevron-up"></i></a>-->
</body>
</html>	