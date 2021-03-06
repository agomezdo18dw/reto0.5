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
        <script type="text/javascript" src="{{ URL::asset('js/Validaciones/EditarProd.js') }}"></script>
        <section>
			<h1 class="TituloGestion trn" data-trn-key="TituloGestion">Gestion de productos</h1>
            <h3 class="TituloGestion trn" data-trn-key="SubTituMOdifi">Modificar producto</h3>
            @foreach($producto as $producto)
                <div id="container">
                    <form action="{{route('modificar')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <label><b>ID:</b></label>
                            <input type="number" name="IDproducto" value="{{$producto->ID_Producto}}" readOnly><br><br>
                        <label><b>Nombre:</b></label>
                            <input type="text" name="Nombre" value="{{$producto->Nombre}}" disabled><br><br>
                        <label><b>Foto: </b></label>
                            <input type="text" name="Nombre" value="{{$producto->Foto}}" disabled><br><br>
                        <label><b>Descripción: </b></label>
                            <textarea name="Descripcion" require id="descripcion">{{$producto->Descripcion}}</textarea><br><br>
                        <label><b>Precio: </b></label>
                            <input type="number" name="Precio" value="{{$producto->Precio_venta}}" require id="precio" step="0.01"><br><br>
                        <label><b>Stock: </b></label>
                            <input type="number" name="Stock" value="{{$producto->Stock}}" require id="stock"><br><br>
                        <label><b>Enlace externo: </b></label>
                            <input type="text" name="Enlace_externo" value="{{$producto->EnlaceExterno}}" id="enlace" require><br><br>
                        <input type="hidden" name="IDtienda" value="{{$_SESSION['IDtienda']}}">
                        <input type="submit" name="Modificar" value="Modificar producto" id="añadir">
                    </form>
                <p id="p"></p>
                </div>
            @endforeach
		</section>
		@include('includes.footer')