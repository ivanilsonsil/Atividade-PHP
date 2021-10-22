   <form method="post">
		
		<p>
		Insira um Valor: <input type="text" name="valor">
		</p>
		<p>
		<input type="submit" name="Submeter">
		</p>

	</form>

	<?php 
	
	$valor = $_POST['valor'];

	if ($valor >= 10) {
		echo "O valor inserido é igual ou maior a 10!";
	} else {
		echo "O valor inserido é menor do que 10!";
	}

 ?>