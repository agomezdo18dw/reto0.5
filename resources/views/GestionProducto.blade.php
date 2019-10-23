<?php
	if(isset($_SESSION['IDtienda'])){
		
	}
	else{
		$_SESSION['IDtienda']=$ID;
	}
?>
@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
        <section>
			<h1 class="TituloGestion">Gestion de productos</h1>
            
            <h2 class="TituloGestion">Añadir Producto</h2>

			<div id="container">
				
			</div>
		</section>
		@include('includes.footer')