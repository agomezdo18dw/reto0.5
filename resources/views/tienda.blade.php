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
				<button name="MostrarProductos" onClick="location.href='/MostrarProductos/{$_SESSION['IDtienda']}'">Mostrar productos</button>
				<button name="InsertarProductos" onClick="location.href='/InsertarProductos/{$_SESSION['IDtienda']}'">Mostrar productos</button>
				
			</div>	
			<div id="container">
				<?php 
					if(isset($_GET['MostrarProductos'])){
							echo "pulsado mostrar productos";
					}
					elseif(isset($_GET['InsertarProductos'])){
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
			</div>
		</section>
		@include('includes.footer')