<!DOCTYPE html>
<html>
<head>
    <style>
        .palavras {
            font-size: 120%;
            color:  rgb(135, 70, 41);
            
        }
        .imgg {
            border-radius: 3%;
            width: 30%;
            height: 30%;
            border: 10px solid rgb(135, 70, 41);
            
        }
    </style>
</head>
<body>
<center>
<?php
error_reporting (E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);
$host = "localhost";
$username = "id2580509_user";
$password = "rootroot";
$db = "id2580509_projetopet";

mysql_connect($host,$username,$password) or die("Impossível conectar ao banco."); 

mysql_select_db($db) or die("Impossível conectar ao banco"); 


$result=mysql_query("SELECT * FROM dadosdono") or die("Impossível executar a query");
while($row = mysql_fetch_assoc($result)){
    $nome = $row["nome"];
    $email = $row["email"];
    $telefone = $row["telefone"];
    $endereco = $row["endereco"];
    $bairro = $row["bairro"];
    $cidade = $row["cidade"];
    $cep = $row["cep"];
    $estado = $row["estado"];
    $nomeanimal = $row["nomeanimal"];
    $idade = $row["idade"];
    $especie = $row["especie"];
    $porte = $row["porte"];
    $sexo = $row["sexo"];

   
    echo "<div class='palavras'>Nome do Dono: $nome <br></div>";
    echo "<div class='palavras'>Telefone: $telefone <br></div>";
    echo "<div class='palavras'>Email: $email <br></div>";


/*$result=mysql_query("SELECT * FROM dadosdono") or die("Impossível executar a query");    
while($row = mysql_fetch_assoc($result)){*/
    
    echo "<div class='palavras'>Nome do Animal: $nomeanimal <br></div>";
    echo "<div class='palavras'>Idade: $idade <br></div>";
    echo "<div class='palavras'>Espécie: $especie <br></div>";
    echo "<div class='palavras'>Porte: $porte <br></div>";
    echo "<div class='palavras'>Sexo: $sexo <br></div>";
        
    /*$result=mysql_query("SELECT * FROM pessoa") or die("Impossível executar a query");*/
    
        
    $dados=mysql_query("SELECT * FROM dadosdono where nomeanimal like '$nomeanimal'") or die("Impossível executar a query"); 
    while($row=mysql_fetch_object($dados)) { 
     
   	echo "<img class='imgg' src='getImagem.php?PicNum=$row->PES_ID' \"><br><br><br>"; 
        
   
} 
}

?>
</center>
</body>
</html>