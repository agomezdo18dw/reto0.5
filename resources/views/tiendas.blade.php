@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
		<section>
		@if ($productos->isEmpty())
			<h2>No hay productos</h2>
		@else
			<h2>Tiendas</h2>
			<table>
				<thead>
					<tr>
						<th>ID</th>
						<th>Nombre</th>
						<th>Precio</th>
					</tr>
				</thead>
				<tbody>
					@foreach($productos as $producto)
						<tr>
							<td>{!! $producto->ID_Producto !!}</td>
							<td>{!! $producto->Nombre !!}</td>
							<td>{!! $producto->Precio_venta !!}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		@endif
		</section>
		@include('includes.footer')