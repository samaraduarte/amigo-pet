<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$imagem = $_FILES["imagem"];
$host = "localhost";
$username = "id2580509_user";
$password = "rootroot";
$db = "id2580509_projetopet";

$nome = $_POST["nome"];
$email = $_POST["email"];
$telefone = $_POST["telefone"];
$endereco = $_POST["endereco"];
$bairro = $_POST["bairro"];
$cidade = $_POST["cidade"];
$cep = $_POST["cep"];
$estado = $_POST["estado"];


$nomeanimal = $_POST["nomeanimal"];
$idade = $_POST["idade"];
$especie = $_POST["especie"];
$porte = $_POST["porte"];
$sexo = $_POST["sexo"];

$PES_IMG = $_POST["PES_IMG"];


if($imagem != NULL) { 
	$nomeFinal = time().'.jpg';
	if (move_uploaded_file($imagem['tmp_name'], $nomeFinal)) {
		$tamanhoImg = filesize($nomeFinal); 

		$mysqlImg = addslashes(fread(fopen($nomeFinal, "r"), $tamanhoImg)); 

		mysql_connect($host,$username,$password) or die("Impossível Conectar"); 

		@mysql_select_db($db) or die("Impossível Conectar"); 
        
        
        mysql_query("INSERT INTO dadosdono (nome,email,telefone,endereco,bairro,cidade,cep,estado,nomeanimal,idade,especie,porte,sexo,PES_IMG) VALUES ('$nome','$email','$telefone','$endereco','$bairro','$cidade','$cep','$estado','$nomeanimal','$idade','$especie','$porte','$sexo','$mysqlImg')") or die("O sistema não foi capaz de executar a query");
        
       /* mysql_query("INSERT INTO dadosnaimal (nomeanimal,idade,especie,porte,sexo,codigodono) VALUES ('$nomeanimal','$idade','$especie','$porte','$sexo','$codigo')") or die("O sistema não foi capaz de executar a query");*/ 

		/*mysql_query("INSERT INTO dadosdono (PES_IMG) VALUES ('$mysqlImg')") or die("O sistema não foi capaz de executar a query"); */
        
        

		unlink($nomeFinal);
		
		header("location:anidisp.php");
	}
} 
else { 
	echo"Você não realizou o upload de forma satisfatória."; 
} 

?>