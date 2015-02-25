<?php
$pageTitle="Ecora | Inicio";
$section="estudio";
include('inc/header.php'); ?>
<img class="bg" src="img/Madera-01.png" alt="">
<div id="fullpage">	
	<!-- Inicio -->
	<section class="section" id="section0">
		<div class="col-md-4 col-md-offset-4">
			<div class="col-md-10 col-md-offset-1">
				<p class="inicio-hero">Éccora un laboratorio y boticario creado pensando en lo natural que ha creado fórmulas originales, 100% naturales, 100% sostenibles y 100% mercado justo!</p>
				<img class="img-responsive" src="img/logo_eccora.svg" alt="">
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<img class="inicio-botellas img-responsive" src="img/botellas.svg" alt="">
			</div>
		</div>
	</section>
	<!-- Catalogo -->
	<section class="section" id="section1">
		<img class="marcopag2" src="img/marcopag2.svg" alt="">
		<div class="pull-right">
			<h1>Catálogo </br> de Productos</h1>
			<p>Ingresa haciendo <a href="#">click aqui</a></p>
		</div>
	</section>
	<!-- Historia -->
	<section class="section" id="section2">
		<div class="col-md-8 col-md-offset-2 historia">
			<img class="img-responsive"	src="img/nuestra-historia.svg" alt="">
			<div class="col-md-5">
				<div class="col-md-10 libro">
					<h4>Nuestra Historia</h1>
					<p>Éccora nace del amor a la vida, a una hija y a la madre tierra. Nuestra fundadora Ursula Nicholls al tener su primogénita decidió nombrarle junto a su pareja Cora un nombre que significa hija del vientre o corazón lleno.</br></br>De este nacimiento, el amor por la naturaleza y la verdad, se crea Éccora, productos para el cuidado de la piel honestos. Honestos con el consumidor y con el productor, que no contaminen la tierra, el agua ni la piel, con precio justo para que todos estén en el alcance de comprarlos.</br></br>Éccora significa hija del vientre de la tierra, nace en 2011 en Bogotá, Colombia, con una proyección de laboratorio y boticario 100% Natural.</br></br>Nuestra historia aún se está escribiendo únete a ella y transformemos como recibimos al mundo!</p>
				</div>
			</div>	
		</div>
	</section>
	<!-- Laboratorio -->
	<section class="section laboratorio" id="section3">
		
			<div class="col-md-6">
				<div class="row">
					<div class="col-md-6">				
						<img class="img-responsive" src="/img/CE73EA7CFB0B4636.png">
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="/img/CE73EA7CFB0B4633.png">
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<img class="img-responsive" src="/img/CE73EA7CFB0B4631.png">
					</div>
					<div class="col-md-6">
						<img class="img-responsive" src="/img/CE73EA7CFB0B4632.png">
					</div>
				</div>
			<div>	
			<div class="col-md-6"></div>
		
	</section>
	<!-- Ingredientes -->
	<section class="section" id="section4"></section>
	<!-- Contacto -->
	<section class="section" id="section5"></section>
<div>
<script>
	$(document).ready(function() {
	    $('#fullpage').fullpage({
		    anchors: ['inicio', 'catalogo', 'historia', 'laboratorio', 'ingredientes', 'contacto'],
		    menu: '#mainMenu'
		});
	});
</script>
</body>
</html>