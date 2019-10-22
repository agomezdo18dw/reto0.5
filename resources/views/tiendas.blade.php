@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
		<section id="tiendas">
			<h2>Tiendas</h2>
			@foreach($tiendas as $tienda)
				<div class="tienda">	
					<h3>{{$tienda->Nombre}}</h3>
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
			@endforeach
		</section>
		@include('includes.footer')