<form method="post">
		
		<p>
			<input type="text" name="salario" placeholder="Informe o seu salário atual">
		</p>
		<p>
			<input type="submit" value="Calcular o novo salário agora!">
		</p>

	</form>
	<?php 

$salario = $_POST['salario'];

$novosalario = 0.0;

if ($salario <= 300.00) {
	
	$novosalario = ($salario * 0.50) + $salario;

	echo "Seu novo Salário agora é: $novosalario Reais";

} else {

	$novosalario = ($salario *  0.30) + $salario;

	echo "Seu novo Salário agora é: $novosalario Reais";

}


?>