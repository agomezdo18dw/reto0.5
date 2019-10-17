var dict = {
				"MInicio":{
					eng:"Start",
					eus:"Hasiera",
					esp:"Inicio"			
				},
				"MTiendas":{
					eng:"Stores",
					eus:"Dendak",
					esp:"Tiendas",
				},
				"MTrabajador":{
					eng:"Worker",
					eus:"Langilea",
					esp:"Trabajador",
				},
				"Parrafo":{
					eng:"La Morea Shopping and Leisure Center, opened its doors to the public on October 16, 2002 with the aim of making available to its customers the best offer in fashion, restoration and leisure of the entire Foral Community of Navarra. Comfort, spaciousness, pleasant atmosphere ... are some of the basic features that make the visitors of La Morea feel at home.	<br> <br> La Morea Shopping and Leisure Center, is composed of more than 90 stores divided into two floors. Today, La Morea is 100% commercialized, a significant fact that demonstrates confidence in the center by operators. A large skylight floods the gallery with natural spaces for transit and rest, such as its large central square with a cafeteria. The two levels of the gallery separate the area of ​​fashion, gifts, accessories and services (ground floor) from the restaurant and leisure area, where in addition to the various premises for traditional bar-restaurant or fast food, we find 12 Cinemas Golem La Morea.",
					eus:"La Morea Merkataritza eta Aisialdi Zentroak ateak zabaldu zizkion 2002ko urriaren 16an Nafarroako Foru Komunitate osoko moda, zaharberritze eta aisia ​​eskaintzarik onena eskaintzeko bere bezeroen eskura jartzea. Erosotasuna, espazio zabala, giro atsegina ... Morearen bisitariak etxean sentiarazten dituzten oinarrizko ezaugarri batzuk dira.<br> <br>La Morea Merkataritza eta Aisialdi Zentroa, 90 dendatik gora bi solairutan banatuta dago. Gaur egun, La Morea% 100 komertzializatzen da, operadoreek zentroan konfiantza erakusten duten datu garrantzitsua. Argindar handi batek gainezka egiten du galeria eta atsedenerako espazio naturalak ditu. Hala nola, bere erdiko plaza kafetegiarekin. Bi galeriek moda, opari, osagarrien eta zerbitzuen eremua (beheko solairua) jatetxe eta aisialdiaren eremutik bereizten dute. Bertan, taberna-jatetxe tradizionaletarako edo janari azkarrerako lokalak ere, 12 aurkitzen ditugu. Zinemak Golem La Morea.",
					esp:"El Centro Comercial y de Ocio La Morea, abrió sus puertas al público el 16 de octubre del año 2002	con el objetivo de poner a disposición de sus clientes la mejor oferta en moda, restauración y ocio de toda la Comunidad Foral de Navarra. Comodidad, sensación de amplitud, ambiente agradable… son algunas de las características básicas que hacen que los visitantes de la Morea se sientan como en casa.<br><br>El Centro Comercial y de Ocio La Morea, está compuesto por más de 90 locales comerciales divididos en dos plantas. A día de hoy, La Morea se encuentra comercializada al 100%, dato significativo que demuestra la confianza en el centro por parte de los operadores. Un gran lucernario inunda de luz natural la galería con espacios de tránsito y descanso, como su gran plaza central con cafetería. Los dos niveles de la galería separan la zona de moda, regalos, complementos y servicios (planta baja) de la zona de restauración y ocio, donde además de los diversos locales destinados a bar-restaurante tradicional o comida rápida, nos encontramos con las 12 salas de Cines Golem La Morea.",
				},
				"InfTitulo":{
					eng:"General information:",
					eus:"Informazio orokorra:",
					esp:"Informacion general:",
				},
				"InfNumero":{
					eng:"Tlf number:&nbsp; 948 243 796",
					eus:"Tlf zenbakia:&nbsp; 948 243 796",
					esp:"Numero Tlf:&nbsp; 948 243 796",
				},
				"InfCorreo":{
					eng:"Email:&nbsp; info@lamorea.com",
					eus:"E-mail:&nbsp; info@lamorea.com",
					esp:"Correo electronico:&nbsp; info@lamorea.com",
				},
				"InfHorario":{
					eng:"Schedule:<br>&nbsp;Monday - Saturday (10:00 - 22:10)<br>&nbsp;Sunday and holidays (closed)",
					eus:"Ordutegia:<br>&nbsp;Astelehenetik - Larunbatera (10:00 - 22:10)<br>&nbsp;Igande eta jai egunak (itxita)",
					esp:"Horario:<br>&nbsp;Lunes - Sabado (10:00 - 22:10)<br>&nbsp;Domingo y festivos (cerrado)",
				},
}

function traducir(idioma){
	var idioma = idioma;
	if(idioma === "eus"){
		var translator =$('body').translate({lang: "eus", t: dict});
	}
	else if(idioma==="eng"){
		var translator = $('body').translate({lang: "eng", t: dict});
	} 
	else if(idioma==="esp"){
		var translator = $('body').translate({lang: "esp", t: dict});
	}
}