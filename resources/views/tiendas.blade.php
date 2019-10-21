@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
		<section>
			<h2>Tiendas</h2>
			@foreach($tiendas as $tienda)
				<div>
					<h3>{{$tienda->Nombre}}</h3>
					@foreach($productos as $producto)
						@if($tienda->PONER QUE EL ID DE LA TIENDA SEA IWAL AL DE LA TIENDA QUE ESTA EN EL PRODUCTO)
						{{$producto['ID_Producto']}}<br>
						{{$producto['Nombre']}}<br>
						{{$producto['Precio_venta']}}<br>
					@endif
					@endforeach
				</div>

			@endforeach
		</section>
		@include('includes.footer')