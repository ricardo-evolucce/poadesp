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
				<h1 class="display-4">Contato</h1>
				<p class="lead texto-cinza">Preencha o formulário abaixo ou use um dos contatos ao lado para falar conosco.</p>
			</div>
		</div>

		
		<div class="row align-items-center">
			<div class="col col-md-6" >
			 
							
				<form class="p-2" style="border: 2px solid #f47c48;" action="mail.php" method="post">
					<h5 class="text-left p-2">TIRE SUAS DÚVIDAS<br>
						<strong>ENTRE EM CONTATO</strong></h5>

						<div class="form-group">
							<!--<label for="exampleFormControlInput1">Email address</label>-->
							<input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome" name="nome" required>
						</div>
						<div class="form-group">
							<!--<label for="exampleFormControlInput1">Email address</label>-->
							<input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Email" name="email" required>
						</div>
						<div class="form-group">
							<!--<label for="exampleFormControlInput1">Email address</label>-->
							<input type="text" class="form-control" id="exampleFormControlInput3" placeholder="Telefone" name="telefone" required>
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

					<input type="submit" class="btn botao p-2" value="ENVIAR">



					</form>
					
						</div>
			<div class="col col-md-6 col-12 text-center bg-light  p-2" >
				
			<ul class="list-group list-group-flush">
	
  <li class="list-group-item"><span class="fa fa-mobile"></span>(51) 99911-3632</li>
  <li class="list-group-item"><span class="fa fa-envelope"></span>atendimento@poadesp.com.br</li>

</ul>

<img src="img/contato.jpg" class="img-fluid rounded">

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