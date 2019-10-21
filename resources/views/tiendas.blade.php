@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
		<section>
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
					<?php foreach($productos as $producto):?>
						<tr>
							<td><?=$producto['ID_Producto'] ?></td>
							<td><?=$producto['Nombre'] ?></td>
							<td><?=$producto['Precio_venta'] ?></td>
						</tr>
					<?php endforeach ?>
				</tbody>
			</table>
		</section>
		@include('includes.footer')