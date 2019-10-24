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
            <h3 class="TituloGestion">Añadir Producto</h3>
			<div id="container">
				<form action="{{route('tienda2',$_SESSION['IDtienda'])}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label><b>Nombre: </b></label>
                        <input type="text" name="Nombre" require><br><br>
                    <label><b>Foto: </b></label>
                        <input type="file" id="foto" name="foto" accept=".jpg, .jpeg, .png" require><br><br>
                    <label><b>Descripción: </b></label>
                        <input type="textarea" name="Descripcion" require><br><br>
                    <label><b>Precio: </b></label>
                        <input type="number" step="0.1" name="Precio" require><br><br>
                    <label><b>Stock: </b></label>
                        <input type="number" name="Stock" require><br><br>
                    <label><b>Enlace externo: </b></label>
                        <input type="text" name="Enlace_externo" require><br><br>
                    <input type="hidden" name="IDtienda" value="{{$_SESSION['IDtienda']}}">
                    <input type="submit" name="añadir" value="añadir producto" id="añadir">
                </form>
			</div>
		</section>
		@include('includes.footer')