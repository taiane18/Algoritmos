<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Aula 1</title>
	</head>
	<body>
		<?php
		/*
		INTEIROS (int) - qualquer número sem decimais positivo ou negativo
		PONTO FLUTUANTE (float, double ou real) - número com decimais
		STRING - texto
		BOOLEANOS - verdadeiro (TRUE) ou falso (FALSE)
		ARRAYS - variáveis multidimensionais, vetores
		OBJETOS - instância de uma classe
		RECURSOS - variáveis especiais do PHP que referenciam recursos externos
		NULO (null) - variável sem nenhum valor, porém é diferente de ""
		*/
		$idade =17;
		$altura = 1.75;
		$nome = "Taiane Maíra";
		$sobrenome = " Kuntzler";
		$apelido = "Tai";
		$casada = true;
		echo "Olá, me chamo $nome $sobrenome, mas pode me chamar de $apelido.";

		/*
		$numero = 50;
		define('CONFIG', 1500);
		//echo CONFIG;
	
		function calc(){
			global $numero;
			echo $numero;
		}
		//calc();
		*/

		/*
		//$cadastro = array('Cliente1', 'Cliente2', 'Cliente3');

		//$cadastro[] = 'Cliente1';
		//$cadastro[] = 'Cliente2';
		//$cadastro = array('cliente1' => 'Jorge', 'cliente2' => 'Ana');

		$cadastro = array(
			'cliente1' => array(
				'nome' => 'Jorge',
				'idade' => '25',
			),
			'cliente2' => array(
				'nome' => 'Ana',
				'idade' => '18',
			),
		);
		var_dump($cadastro);
		//echo $cadastro['cliente1']['nome'];

		echo "Olá, meu nome é $nome e eu tenho $idade anos.";
		*/
	?>
</body>
</html>