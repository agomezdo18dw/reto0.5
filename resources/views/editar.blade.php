@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
        <section>
			<h1 class="TituloGestion">Gestion de productos</h1>
            <h2 class="TituloGestion">Modificar Producto</h2>
			<div id="container">
				<form action="{{route('modificar, $producto->ID_Producto')}}" method="POST" enctype="multipart/form-data">
                @csrf
                    <label>Nombre :</label>
                    <input type="text" name="Nombre" placeholder="{{$producto->Nombre}}" readonly="readonly"><br><br>
                </form>
			</div>
		</section>
		@include('includes.footer')