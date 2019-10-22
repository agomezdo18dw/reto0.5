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
				<?php 
					if(isset($_POST['InsertarProductos'])){
						echo "pulsado insertar productos";
							//<form action="{{route('IDtienda')}}" method="post">
							//	@csrf
							//	<label> Nombre: </label>
							//		<input type="text" name="NombreProducto" require><br><br>
							//	<label> Descripcion: </label>
							//		<textarea name="DescripcionProducto" rows="8" cols="30" require>Inserte Descripcion del producto</textarea><br><br>
							//	<label>Precio de venta (€): </label>
							//		<input type="number" name="PrecioVenta" require><br><br>
							//	<label>Precio de compra (€): </label>
							//		<input type="number" name="PrecioCompra" require><br><br>
							//	<label> Stock: </label>
							//		<input type="number" name="Stock" require><br><br>
							//	<label> Foto: </label>
							//		<input type="file" name="foto" require><br><br>
							//	<label> Enlace: </label>
							//		<input type="url" name="EnlaceProducto" require><br><br>
							//	<input type="submit" name="AñadirProducto" value="Añadir Producto">
							//</form>
					}
				?>
				<div class="productos">
						@foreach($productos as $producto)
							@if($tienda->ID_Tienda === $producto->ID_Tienda)
								<div class="producto">
									<h4>{{$producto->Nombre}}</h4><br>
									<h4>{{$producto->Precio_venta}}</h4><br>
									<h4>{{$producto->Stock}}</h4>
									@if($producto->Stock === 0)
										<p class="Agotado">AGOTADO</p>
									@else
										<button onclick="{{route('comprar')}}">Comprar</button>
									@endif
								</div>
							@endif	
						@endforeach
					</div>
			</div>
		</section>
		@include('includes.footer')