<?php 

	require_once 'classes/Calculadora.php';


	

	$numero1 = $_POST['numero1'];
	$numero2 = $_POST['numero2'];
	$operacao = $_POST['operacao'];



	$calculadora = new Calculadora;

	$calculadora->setNumero1($numero1);
	$calculadora->setNumero2($numero2);

				
	switch ($operacao) {
			case 'somar':
				$calculadora->somar();
				echo "Resultado: ".$calculadora->getTotal(). "<br><br>";
				break;
			case 'subtrair':
				$calculadora->subtrair();
				echo "Resultado: ".$calculadora->getTotal(). "<br><br>";
				break;
			case 'multiplicar':
				$calculadora->multiplicar();
				echo "Resultado: ".$calculadora->getTotal(). "<br><br>";
				break;
			case 'dividir':
				$calculadora->dividir();
				echo "Resultado: ".$calculadora->getTotal() . "<br><br>";
				break;
		}


 ?>

 <html>
 	
 <button><a href="index.html">Outro Calculo</a></button>
 	
 </html>