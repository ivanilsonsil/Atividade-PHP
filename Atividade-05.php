<form method="post">
		<p>
		<input type="text" name="valorA" placeholder="Valor de A">
		</p>
		<p>
		<input type="text" name="valorB" placeholder="Valor de B">
		</p>
		<button type="submit">Conferir Resultado</button>

	</form>


<?php 

	$valor1 = $_POST['valorA'];
	$valor2 = $_POST['valorB'];

	if ($valor1 < $valor2) print "$valor1 $valor2";
		elseif ($valor2 < $valor1) print "$valor2 $valor1";
		elseif ($valor2 == $valor1) print "$valor1 $valor2";

 ?>