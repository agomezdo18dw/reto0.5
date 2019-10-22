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
			<h1 id="GestionProducto">Gestion de productos</h1>
			<div id="submenu">
				<button name="InsertarProductos"><a href="">Insertar Producto</a></button>
			</div>	
			<div id="container">
				<div class="productos">
						@foreach($productos as $producto)
								<div class="producto">
									<h4>{{$producto->Nombre}}</h4><br>
									<h4>{{$producto->Descripcion}}</h4><br>
									<h4>{{$producto->Precio_compra}}</h4><br>
									<h4>{{$producto->Precio_venta}}</h4><br>
									<h4>{{$producto->Stock}}</h4><br>
									@if($producto->Stock === 0)
										<p class="Agotado">AGOTADO</p><br>
									@endif
									<h4><a href="{{$producto->EnlaceExterno}}">{{$producto->EnlaceExterno}}</a></h4>
								</div>	
						@endforeach
					</div>
			</div>
		</section>
		@include('includes.footer')