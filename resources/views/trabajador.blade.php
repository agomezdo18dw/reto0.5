@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
		<section id="Sectrabajador">
			<div id="seleccionTienda">
                <h2>En que tienda trabajas?</h2>
                <form action="{{route('IDtienda')}}" method="post">
                @csrf
                    <select size="1" name="Tiendas" id="ListaTiendas">
                        <option value="1" name="Mediamarkt">Mediamarkt</option>
                        <option value="2" name="Zara">Zara</option>
                        <option value="3" name="Game">Game</option>
                        <option value="4" name="Fnac">Fnac</option>
                        <option value="5" name="InterSport">InterSport</option>
					</select>
                    <input type="submit" name="entrar" value="entrar">
                </form>
            </div>
		</section>
		@include('includes.footer')