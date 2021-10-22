<form  method="post">
		
		<p>
			<input type="text" name="nota1" placeholder="Insira a 1° Nota">
		</p>
		<p>
			<input type="text" name="nota2" placeholder="Insira a 2° Nota">
		</p>
		<p>
			<input type="text" name="nota3" placeholder="Insira a 3° Nota">
		</p>
		<p>
			<input type="text" name="nota4" placeholder="Insira a 4° Nota">
		</p>

		<button type="submit">Conferir meu Resultado Final</button>


</form>

<?php 

	$nota1 = $_POST['nota1'];
	$nota2 = $_POST['nota2'];
	$nota3 = $_POST['nota3'];
	$nota4 = $_POST['nota4'];

	$media = ($nota1 + $nota2 + $nota3 + $nota4)/4;

	if ($media >= 7.0) echo "Sua média é: $media <br>Você foi Aprovado, Parabéns!";
		else echo "Sua média é: $media <br>Você foi Reprovado :(";
 ?>