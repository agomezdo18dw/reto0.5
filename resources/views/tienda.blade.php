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
			<div id="submenu">
				<form method="post" action="{{route('GestionProducto')}}">
				@csrf
					<input type="hidden" name="IDtienda" value="{{$_SESSION['IDtienda']}}">
					<input type="submit" name="InsertarProducto" value="Añadir un producto nuevo">
				</form>
			</div>	
			<div id="container">
				<div class="productos">
						@foreach($productos as $producto)
								<div class="producto">
									<h4>ID Producto: {{$producto->ID_Producto}}</h4>
									<h4>{{$producto->Nombre}}</h4><br>
									<img src="/img/Productos/{{$_SESSION['IDtienda']}}/{{$producto->Foto}}" class="imgProd">
									<h4>{{$producto->Descripcion}}</h4><br>
									<h4>{{$producto->Precio_venta}} €</h4><br>
									@if($producto->Stock === 0)
										<p class="Agotado">AGOTADO</p><br>
									@else
										<h4>Stock : {{$producto->Stock}}</h4><br>
									@endif
<<<<<<< HEAD
									<h4><a href="{{$producto->EnlaceExterno}}">{{$producto->EnlaceExterno}}</a></h4><br>
									<form method="post" action="{{route('editar', $producto->ID_Producto)}}">
										@csrf
										<input type="submit" name="ModificarProducto" value="Modificar producto">
									</form>
=======
									<h4><a href="http://{{$producto->EnlaceExterno}}">{{$producto->EnlaceExterno}}</a></h4><br>
>>>>>>> 9d9858d6db17def245c1a165271f272ad120c04a
									<button name="EliminarProducto" onclick="Route('eliminar','{{$producto->ID_Producto}}')">Eliminar</button>
								</div>	
						@endforeach
				</div>
			</div>
		</section>
		@include('includes.footer')