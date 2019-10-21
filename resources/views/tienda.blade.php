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
			<h1>Gestion de productos</h1>
			<div id="mostrarProductos">
				mostrar_productos($_SESSION['IDtienda']);
			</div>
			<div id="agregarProductos">
				<form action="{{route('')}}" method="post">
					@csrf
					<label> Nombre: </label>
						<input type="text" name="NombreProducto" require><br><br>
					<label> Descripcion: </label>
						<textarea name="DescripcionProducto" rows="8" cols="30" require>Inserte Descripcion del producto</textarea><br><br>
					<label>Precio de venta (€): </label>
						<input type="number" name="PrecioVenta" require><br><br>
					<label>Precio de compra (€): </label>
						<input type="number" name="PrecioCompra" require><br><br>
					<label> Stock: </label>
						<input type="number" name="Stock" require><br><br>
					<label> Enlace: </label>
						<input type="url" name="EnlaceProducto" require><br><br>
					<input type="submit" name="AñadirProducto" value="Añadir Producto">
					<!-- ID_PRODUCTO, ID_TIENDA, NOMBRE, DESCRIPCION, PRECIO_VENTA, PRECIO_COMPRA, STOCK, ENLACE_EXTERNO -->
                </form>
			</div>
		</section>
		@include('includes.footer')