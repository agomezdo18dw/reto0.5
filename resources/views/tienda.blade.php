<!DOCTYPE html>
<html>
<?php
	if(isset($_SESSION['IDtienda'])){
		
	}
	else
	{
		$_SESSION['IDtienda']=$ID;
	}
	
	
?>
@include('includes.head')
        @include('includes.header')
        @include('includes.nav')
		<section>

		</section>
		<footer>
			<p>
				Adrián Gómez, Iñigo Perez @ Zubiri manteo
			</p>
		</footer>
	</body>
</html>