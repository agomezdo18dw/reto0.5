@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
		<section id="tiendas">
			<h1>Tiendas</h1>
			@foreach($tiendas as $tienda)
				<div class="tienda">	
					<h2>{{$tienda->Nombre}}</h2>
					<div class="productos">
						@foreach($productos as $producto)
							@if($tienda->ID_Tienda === $producto->ID_Tienda)
								<div class="producto">
									<h3>{{$producto->Nombre}}</h3><br>
									<img src="img/Productos/{{$producto->ID_Tienda}}/{{$producto->Foto}}" class="imgProd">
									<div class="descPrecio">
										<h4>{{$producto->Precio_venta}}€</h4><br>
										<p>{{$producto->Descripcion}}</p><br>
										@if($producto->Stock === 0)
											<p class="Agotado">AGOTADO</p>
										@else
											<button onclick="{{route('comprar')}}" class="descPrecioBot">Comprar</button>
										@endif
									</div>
								</div>
							@endif	
						@endforeach
					</div>
				</div>
			@endforeach
		</section>
		@include('includes.footer')