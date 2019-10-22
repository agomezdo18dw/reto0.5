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
				<form action="{{route('tienda2',$_SESSION['IDtienda'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label>Nombre :</label>
                        <input type="text" name="Nombre" require><br><br>
                    <label>Foto :</label>
                        <input type="file" name="foto" require><br><br>
                    <label>Descripción :</label>
                        <input type="textarea" name="Descripcion" require><br><br>
                    <label>Precio :</label>
                        <input type="number" name="Precio" require><br><br>
                    <label>Stock :</label>
                        <input type="number" name="Stock" require><br><br>
                    <label>Enlace externo :</label>
                        <input type="text" name="Enlace_externo" require><br><br>
                    <input type="submit" name="añadir" value="añadir producto">
                </form>
			</div>
		</section>
		@include('includes.footer')