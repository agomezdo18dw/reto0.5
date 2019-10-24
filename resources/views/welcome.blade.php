@include('includes.head')
	@include('includes.header')
	@include('includes.nav')    
	<section>
		<div id="contenido">
		<h1>La Morea</h1>
			<div id="infGen">
				<div id="texto">
					<p class="trn" data-trn-key="Parrafo">
						El Centro Comercial y de Ocio La Morea, abrió sus puertas al público el 16 de octubre del año 2002
						con el objetivo de poner a disposición de sus clientes la mejor oferta en moda, restauración y ocio de toda la Comunidad Foral de Navarra. Comodidad, sensación de amplitud, ambiente agradable… son algunas de las características básicas que hacen que los visitantes de la Morea se sientan como en casa.
						<br><br>
						El Centro Comercial y de Ocio La Morea, está compuesto por más de 90 locales comerciales divididos en dos plantas. A día de hoy, La Morea se encuentra comercializada al 100%, dato significativo que demuestra la confianza en el centro por parte de los operadores. Un gran lucernario inunda de luz natural la galería con espacios de tránsito y descanso, como su gran plaza central con cafetería. Los dos niveles de la galería separan la zona de moda, regalos, complementos y servicios (planta baja) de la zona de restauración y ocio, donde además de los diversos locales destinados a bar-restaurante tradicional o comida rápida, nos encontramos con las 12 salas de Cines Golem La Morea.
					</p>
				</div>
				<img id="imgInfGen" src="img/imagenPrincipal.jpg">
			</div>
			<div id="mapaInfo">
				<div id="mapa">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d93701.97160905186!2d-1.7015418568523508!3d42.78440465933851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd5091be0c678881%3A0x2943da9e1fdb0643!2sCentro%20Comercial%20La%20Morea!5e0!3m2!1ses!2ses!4v1571226491676!5m2!1ses!2ses"></iframe>
				</div>
				<div id="info">
					<h2 class="trn" data-trn-key="InfTitulo">Información General:</h2>
					<ul id="infoUL">
						<li><strong class="trn" data-trn-key="InfNumero">Numero Tlf:</strong>
							<ul class="subinfo">
								<li>948 243 796</li>
							</ul>
						</li>
						<li><strong  class="trn" data-trn-key="InfCorreo">Correo electronico:</strong>
							<ul class="subinfo">
								<li>info@lamorea.com</li>
							</ul>
						</li>
						<li><strong class="trn" data-trn-key="InfHorario">Horario:</strong>
							<ul class="subinfo">
								<li class="trn" data-trn-key="InfDatHorario1">Lunes - Sabado (10:00 - 22:00)</li>
								<li class="trn" data-trn-key="InfDatHorario2">Domingo y festivos (cerrado)</li>
							</ul>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</section>
	@include('includes.footer')