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
									<p>{{$producto->Descripcion}}</p><br>
									<h4>{{$producto->Precio_venta}}€</h4><br>
									@if($producto->Stock === 0)
										<p class="Agotado">AGOTADO</p><br>
									@else
										<h4>Stock: {{$producto->Stock}}</h4><br>
									@endif								
									<h4><a href="http://{{$producto->EnlaceExterno}}" target="_BLANK">{{$producto->EnlaceExterno}}</a></h4><br>
									<form method="post" action="{{route('editar')}}">
										@csrf
										<input type="hidden" name="IDtienda" value="{{$_SESSION['IDtienda']}}">
										<input type="hidden" name="IDprod" value="{{$producto->ID_Producto}}">
										<input type="submit" name="ModificarProducto" value="Modificar producto">
									</form>
									<form method="post" action="{{route('eliminar',$producto->ID_Producto)}}">
										@csrf
										<input type="hidden" name="IDtienda" value="{{$_SESSION['IDtienda']}}">
										<input type="submit" name="eliminar" value="Eliminar producto">
									</form>
								</div>	
						@endforeach
				</div>
			</div>
		</section>
		@include('includes.footer')