<!doctype html>
<html>
<head>
	<meta charset="utf-8">

	<!--fonts google-->
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Mukta:wght@600;800&display=swap" rel="stylesheet">



	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/social-icons.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--social icons-->
	<!-- Add icon library -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	

</head>

<body>
	<?php include('../includes/header2.php'); ?>



	<section class="container jumbotron ">


		<div class="row">
			<div class="col-12 col-md-7"><h1 class="display-4">Comunicação de venda </h1> 
				<p class="lead texto-cinza">Comunicar a venda de seu veículo ao DetranRS é a melhor forma de se proteger do mau uso do veículo que você vendeu e ainda não foi transferido. Este é um procedimento que deve ser feito imediatamente após a venda, assim você está protegido de eventuais infrações cometidas pelo comprador enquanto ele ainda não tiver concluído a transferência.</p>
				<hr class="my-4 cor-laranja">
				<p class="texto-cinza">Para maiores informações, entre em contato via Whatsapp</p>
				<a class="btn btn-primary btn-lg botao" href="https://api.whatsapp.com/send?phone=5551999113632" role="button">Contato via Whatsapp</a>
			</div>

			<div class="col-12 col-md-5 mt-2-m">
				<img src="../img/servicos/comunicacao-venda.jpg" class="img-fluid rounded">
			</div>

		</div>
	</section>




<?php include('../includes/footer.php') ?>





	<script src="../jquery/jquery-3.5.1.min.js"></script>
	<script src="../bootstrap/js/bootstrap.min.js"></script>
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