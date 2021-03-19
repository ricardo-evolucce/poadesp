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

	<?php

	require 'includes/PHPMailer-master/src/Exception.php';
	require 'includes/PHPMailer-master/src/PHPMailer.php';
	require 'includes/PHPMailer-master/src/SMTP.php';

	?>




</head>

<body>
	

	<?php include('includes/header.php'); ?>

	<section class="container mb-4">

		
		<div class="row align-items-center">
			<div class="col col-md-8 col-12">
				<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
					<ol class="carousel-indicators">
						<li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
						<li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
					
					</ol>
					<div class="carousel-inner">
						
						<div class="carousel-item active">
							<img src="img/carousel/1.jpg" class="d-block w-100" alt="...">
							<!--<div class="carousel-caption caption">
								
							</div>-->
						</div>
						<div class="carousel-item">
							<img src="img/carousel/2.jpg" class="d-block w-100" alt="...">
							<!--<div class="carousel-caption caption">
								<h2>Comunicação de venda</h2>
								<p>Se proteja de multas futuras e eventuais irregularidades causadas pelo novo dono.</p>
							</div>-->
						</div>
						<div class="carousel-item">
							<img src="img/carousel/3.jpg" class="d-block w-100" alt="...">
							<!--<div class="carousel-caption caption">
								<h2>Comunicação de venda</h2>
								<p>Se proteja de multas futuras e eventuais irregularidades causadas pelo novo dono.</p>
							</div>-->
						</div>
				
					</div>
					<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
						<span class="carousel-control-prev-icon" aria-hidden="true"></span>
						<span class="sr-only">Previous</span>
					</a>
					<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
						<span class="carousel-control-next-icon" aria-hidden="true"></span>
						<span class="sr-only">Next</span>
					</a>
				</div>
			</div>
			<div class="col col-md-4 col-12 text-center bg-light  p-2" style="border: 2px solid #f47c48;">
				<form action="mail.php" method="post" id="form">
					<h5 class="text-left p-2">FAÇA AQUI<br>
						<strong>SEU ORÇAMENTO</strong></h5>

						<div class="form-group">
							<!--<label for="exampleFormControlInput1">Email address</label>-->
							<input type="text" name="nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome" required>
						</div>
						<div class="form-group">
							<!--<label for="exampleFormControlInput1">Email address</label>-->
							<input type="email" name="email" class="form-control" id="exampleFormControlInput2" placeholder="Email" required>
						</div>
						<div class="form-group">
							<!--<label for="exampleFormControlInput1">Email address</label>-->
							<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Telefone" name="telefone" required>
						</div>
						<div class="form-group">
							<!--<label for="exampleFormControlInput1">Email address</label>-->
							<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Placa" name="placa">
						</div>
						<div class="form-group">
							<!--<label for="exampleFormControlInput1">Email address</label>-->
							<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Renavam" name="renavam">
						</div>
						<!--<div class="form-group">
							<label for="exampleFormControlSelect1">Example select</label>
							<select class="form-control" id="exampleFormControlSelect1">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>
						<div class="form-group">
							<label for="exampleFormControlSelect2">Example multiple select</label>
							<select multiple class="form-control" id="exampleFormControlSelect2">
								<option>1</option>
								<option>2</option>
								<option>3</option>
								<option>4</option>
								<option>5</option>
							</select>
						</div>-->
						<div class="form-group">
							<!--<label for="exampleFormControlTextarea1">Example textarea</label>-->
							<textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Mensagem" name="mensagem" required></textarea>
						</div>




						<input type="submit" class="btn botao p-2" value="SOLICITAR ORÇAMENTO">
					</form>
					
				</div>



			</div>


		</section>
<div class="row d-flex justify-content-center text-center caixa-endereco mb-3">
		<div class="card pt-2">
			<h3>LOCALIZAÇÃO</h3>
  <div class="card-body endereco p-4">
    <h5 class="card-title">Av. Ipiranga, 7464 - Sala 818 - 91530-000</h5>
    <p class="card-text">Porto Alegre - RS</p>
  
  </div>
</div>
</div>
		<section class="container-fluid" style="border: 2px solid #f47c48;">

			<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3453.3626895393113!2d-51.165957785351075!3d-30.05513663873354!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x951977e1800c96cb%3A0xbd4d7c842bdf200c!2sAv.%20Ipiranga%2C%207464%20-%20Jardim%20Bot%C3%A2nico%2C%20Porto%20Alegre%20-%20RS%2C%2091530-000!5e0!3m2!1spt-BR!2sbr!4v1610649016474!5m2!1spt-BR!2sbr"  frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0" width="100%" height="400px"></iframe>
		</section>


<?php include('includes/footer2.php') ?>





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





<script type="text/javascript">
	$(function() {
  // ------------------------------------------------------- //
  // Multi Level dropdowns
  // ------------------------------------------------------ //
  $("ul.dropdown-menu [data-toggle='dropdown']").on("click", function(event) {
    event.preventDefault();
    event.stopPropagation();

    $(this).siblings().toggleClass("show");


    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
    }
    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
      $('.dropdown-submenu .show').removeClass("show");
    });

  });
});

</script>


	<!--<a id="back-to-top" href="#" class="btn btn-light btn-lg back-to-top" role="button"><i class="fa fa-chevron-up"></i></a>-->
	</body>
	</html>	