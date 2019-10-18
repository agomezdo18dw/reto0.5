<html>
	<head>
		<title>La Morea/Trabajador</title>
		<link rel="stylesheet" type="text/css" href="estilos/index.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery.translate.js"></script>
		<script src="js/Diccionario.js"></script>
	</head>
	<body>
		<header>
			<img id="logo" src="imagenes/Logo.png">
			<div id="RRSS">
				<a href="https://www.facebook.com/LaMoreaCC" target="_BLANK"><img class="rrss" src="imagenes/RRSS/facebook.png"></a>
				<a href="https://twitter.com/la_morea" target="_BLANK"><img class="rrss" src="imagenes/RRSS/twitter.png"></a>
				<a href="https://www.youtube.com/channel/UCzpwdk2Fe9SwLYByWiZQZ1Q" target="_BLANK"><img class="rrss" src="imagenes/RRSS/youtube.png"></a>
				<a href="https://www.instagram.com/la_morea/" target="_BLANK"><img class="rrss" src="imagenes/RRSS/instagram.png"></a>
			</div>
			<div id="Idiomas">
				<img class="banderas" src="imagenes/Banderas/Basquecountry_flag.png" onclick="traducir('eus')">
				<img class="banderas" src="imagenes/Banderas/spain_flag.png" onclick="traducir('esp')">
				<img class="banderas" src="imagenes/Banderas/united_kingdom_flag.png" onclick="traducir('eng')">
			</div>
		</header>
		<nav>
			<ul id="Bcliente">
				<a href="<?php echo route('/'); ?>"><li class="trn" data-trn-key="MInicio">Inicio</li></a>
				<a href="<?php echo route('tiendas'); ?>"><li class="trn" data-trn-key="MTiendas">Tiendas</li></a>
			</ul>
			<ul id="Btrabajador" >
				<a href="<?php echo route('trabajador'); ?>"><li class="trn" data-trn-key="MTrabajador">Trabajador</li></a>
			</ul>
		</nav>
		<section>
			<div id="seleccionTienda">
                <h2>En que tienda trabajas?</h2>
                <form action="{{route('add')}}" method="POST">
                    <select size="1" name="Tiendas" id="ListaTiendas">
                        <option value="1">Mediamarkt</option>
                        <option value="2">Zara</option>
                        <option value="3">Game</option>
					</select>
                </form>
            </div>
		</section>
		<footer>
			<p>
				Adrián Gómez, Iñigo Perez @ Zubiri manteo
			</p>
		</footer>
	</body>
</html>