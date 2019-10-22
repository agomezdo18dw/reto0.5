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
									<img src="{{$producto->Foto}}" class="imgProd">
									<h4>{{$producto->Descripcion}}</h4><br>
									<h4>{{$producto->Precio_venta}} €</h4><br>
									@if($producto->Stock === 0)
										<p class="Agotado">AGOTADO</p><br>
									@else
										<h4>Stock : {{$producto->Stock}}</h4><br>
									@endif
									<h4><a href="{{$producto->EnlaceExterno}}">{{$producto->EnlaceExterno}}</a></h4><br>
									<button name="EliminarProducto">Eliminar</button>
									<button name="ModificarProducto">Modificar</button>
								</div>	
						@endforeach
					</div>
			</div>
		</section>
		@include('includes.footer')