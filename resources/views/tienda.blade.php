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
				<form method="POST" action="{{route('GestionProducto')}}">
				@csrf
					<input type="submit" name="InsertarProducto" value="Añadir un producto nuevo">
				</form>
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