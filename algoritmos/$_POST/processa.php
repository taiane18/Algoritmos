<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dados do Formulário</title>
	</head>
	<body>
		<h1>Dados do Formulário</h1>
		<?php
			if(isset($_POST["nome"])==true){
				$nome=$_POST["nome"];
				echo "O nome da pessoa é: ".$nome."<br>";
			}
			if(isset($_POST["sexo"])==true){
				$sexo=$_POST["sexo"];
				echo "O sexo da pessoa é: ".$sexo."<br>";
			}
			if(isset($_POST["corolhos"])==true){
				$cor=$_POST["corolhos"];
				echo "A cor dos olhos da pessoa é: ".$cor."<br>";
			}
			if(isset($_POST["coisa"])==true){
				$vetorbox=$_POST["coisa"];
				
				foreach($vetorbox as $coisa){
					if($coisa=="altura"){
						echo "Acima de 1,83 de altura<br>";
					} elseif($coisa=="peso"){
						echo "Acima de 91 kg<br>";
					} else{
						echo"<br>";
					}
				}
			}
			if(isset($_POST["msg"])==true){
				$msg=$_POST["msg"];
				echo "Mensagem: ".$msg."<br>";
			}
		?>
	</body>
</html>