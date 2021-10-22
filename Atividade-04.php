<form  method="post">
		
		<p>
			Insira o valor de A: <input type="text" name="valorA" placeholder="Valor de A">
		</p>
		<p>
			Insira o valor de B: <input type="text" name="valorB" placeholder="Valor de B">
		</p>
		<p>
			Insira o valor de C: <input type="text" name="valorC" placeholder="Valor de C">
		</p>
		<p>
			Insira o valor de D: <input type="text" name="valorD" placeholder="Valor de D">
		</p>

		<button type="submit">Enviar</button>

	</form>


<?php 

	$valor1 = $_POST['valorA'];
	$valor2 = $_POST['valorB'];
	$valor3 = $_POST['valorC'];
	$valor4 = $_POST['valorD'];
	
	$soma = $valor1 + $valor3;
	$multiplicacao = $valor2 * $valor4;

	if ($soma > $multiplicacao) print "$valor1 + $valor3 é maior que B * D";
		elseif ($soma < $multiplicacao) print "A + C é menor que B * D";
		elseif ($soma == $multiplicacao) print "A + C é igual a B * D";

 ?>