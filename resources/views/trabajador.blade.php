<!DOCTYPE html>
<html>
@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
		<section>
			<div id="seleccionTienda">
                <h2>En que tienda trabajas?</h2>
                <form action="{{route('IDtienda')}}" method="post">
                    <select size="1" name="Tiendas" id="ListaTiendas">
                        <option value="1" >Mediamarkt</option>
                        <option value="2" >Zara</option>
                        <option value="3" >Game</option>
					</select>
                </form>
            </div>
		</section>
		<footer>
			<p>
				Adrián Gómez, Iñigo Perez @ Zubiri manteo
			</p>
		</footer>
	</body>
</html>