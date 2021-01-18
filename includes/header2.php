
<style type="text/css">
		/*
*
* ==========================================
* CUSTOM UTIL CLASSES
* ==========================================
*
*/

.dropdown-submenu {
	position: relative;
}

.dropdown-submenu>a:after {
	content: "\f0da";
	float: right;
	border: none;
	font-family: 'FontAwesome';
}

.dropdown-submenu>.dropdown-menu {
	top: 0;
	left: 100%;
	margin-top: 0px;
	margin-left: 0px;
}

/*
*
* ==========================================
* FOR DEMO PURPOSES
* ==========================================
*
*/



@media (min-width: 991px) {
	.dropdown-menu {
		box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
	}
}

</style>


<header class="bg-light fixed-top">
	<div class="container-fluid logo-redes">
		<div class="row align-items-center ">
			<div class="col col-md-3 offset-md-1 logo" style="border-top: 5px solid #fff">
				<a href="../index.php"><img src="../img/logo.jpg" class="img-fluid"></a>
			</div>
			<div class="col col-md-4 offset-md-4 text-center ">
				<a href="https://api.whatsapp.com/send?phone=5551999113632" class="fa fa-whatsapp" style="font-size:25px;"></a>
				<a href="https://www.facebook.com/PoaDesp/" class="fa fa-facebook" style="font-size:25px;"></a>
				<a href="http://instagram.com/poadesp" class="fa fa-instagram" style="font-size:25px;"></a>

			</div>

		</div>
	</div>


	<nav class="navbar nav-tabs  navbar-expand-lg navbar-light bg-light mb-1" style="border-color: #f47c48!important;">
		<div class="container">

			
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-fill w-100 align-items-start">
					<li class="nav-item"><a  href="../index.php" class="nav-link">Início</a></li>
					<li class="nav-item"><a  href="../quem-somos.php" class="nav-link">Quem somos</a></li>
					<!-- Level one dropdown -->
					<li class="nav-item dropdown">


						<a id="dropdownMenu1" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-toggle">Serviços</a>
						<ul aria-labelledby="dropdownMenu1" class="dropdown-menu border-0 shadow">
							<li><a class="dropdown-item" href="primeiro-emplacamento.php">Primeiro emplacamento</a></li>
							<li><a class="dropdown-item" href="transferencia-propriedade.php">Transferência de propriedade</a></li>
							<li><a class="dropdown-item" href="impressao-atpv-e.php">Impressão da ATPV-e</a></li>
							<li><a class="dropdown-item" href="comunicacao-de-venda.php">Comunicação de venda</a></li>
							<li><a class="dropdown-item" href="impressao-crv-digital.php">Impressão de CRV digital</a></li>
							<!-- Level two dropdown-->
							<li class="dropdown-submenu">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Alterações</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<li>
										
										<a tabindex="-1" class="dropdown-item" href="alteracoes-caracteristicas-originais.php">Alterações de características originais</a>
										<a tabindex="-1" class="dropdown-item" href="alteracao-nome-endereco-razao-social.php">Alterações de nome, endereço, razão social</a>
										<a tabindex="-1" class="dropdown-item" href="troca-municipio-estado.php">Troca de município e de estado</a>
										<a tabindex="-1" class="dropdown-item" href="troca-placa.php">Troca de placa</a>
										
									</li>

									
								</ul>
							</li>
							

							

							<!-- Level two dropdown-->
							<li class="dropdown-submenu">
								<a id="dropdownMenu2" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-item dropdown-toggle">Vistorias</a>
								<ul aria-labelledby="dropdownMenu2" class="dropdown-menu border-0 shadow">
									<li>
										<a tabindex="-1" class="dropdown-item" href="vistoria-gnv.php">Vistoria para GNV</a>
										<a tabindex="-1" class="dropdown-item" href="vistoria-previa-antes-compra.php">Vistoria prévia antes da compra</a>
									</li>

									
								</ul>
							</li>
							<!-- End Level two -->							
							<li><a class="dropdown-item" href="segunda-via-crv.php">Segunda via CRV</a></li>
							<li><a class="dropdown-item" href="elaboracao-procuracoes.php">Elaboração de procurações</a></li>
							<li><a class="dropdown-item" href="consulta-veiculos-deposito.php">Consulta de veículos em depósito</a></li>
							<li><a class="dropdown-item" href="liberacao-veiculos-deposito.php">Liberação de veículos em depósito</a></li>
							<li><a class="dropdown-item" href="registro-antt.php">Registro ANTT</a></li>
						</ul>
					</li>
					<!-- End Level one -->
					<li class="nav-item"><a href="../diferenciais.php" class="nav-link">Diferenciais</a></li>
					<li class="nav-item"><a href="" class="nav-link" style="color: #f47c48 !important; font-weight: bolder">PCD</a></li>
					<li class="nav-item"><a href="" class="nav-link">Convênios</a></li>
					<li class="nav-item"><a href="../orcamento.php" class="nav-link">Orçamento</a></li>
					<li class="nav-item"><a href="../contato.php" class="nav-link">Contato</a></li>



				</ul>
			</div>
		</div>
	</nav>
</header>