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

	<section class="container mb-4">


		<div class="row align-items-center">
			<div class="col col-md-12">
				<h1 class="display-4">Diferenciais</h1>
				<p class="lead texto-cinza">Confira os diferenciais em estrutura e atendimento que a PoaDesp oferece</p>
			</div>
		</div>

	
		<div class="row align-items-center">
			<div class="col col-md-6" >
			 
							
				<img src="img/diferenciais.jpg" class="img-fluid rounded">
					
						</div>
			<div class="col col-md-6 col-12 text-center bg-light  p-2">
				
			<ul class="list-group list-group-flush">
	
  <li class="list-group-item"><span class="fa fa-clock-o" aria-hidden="true"></span>Pontualidade</li>
  <li class="list-group-item"><span class="fa fa-thumbs-o-up" aria-hidden="true"></span>Flexibilidade no horário de atendimento</li>
  <li class="list-group-item"><span class="fa fa-money" aria-hidden="true"></span>Facilidade no pagamento</li>
  <li class="list-group-item"><span class="fa fa-leanpub" aria-hidden="true"></span>Amplo conhecimento nos procedimentos do DetranRS e de órgãos relacionados</li>
  <li class="list-group-item"><span class="fa fa-map-marker" aria-hidden="true"></span>Escritório localizado em um empreendimento com acessibilidade, facilidade de acesso e conveniência necessária para o melhor atendimento, além de estar a 450m do CRVA Ipiranga</li>

</ul>



				</div>



			</div>


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