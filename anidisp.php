<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="utf-8">
    <script src="jquery-3.2.1.js"></script>
     <script src="script.js"></script>
     <script src="script1.js"></script>
        <link rel="stylesheet" href="estilo2.css">
        
    
    <title> Animais disponíveis </title>
   
    <link href="https://fonts.googleapis.com/css?family=Flamenco" rel="stylesheet">
    <style>
        
        *{
            padding: 0;
            margin: 0;
        }
.li2 {
    list-style-type: none;
    font-family: 'Flamenco', cursive;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #4B3421;
    position: fixed;
    top: 0;
    width: 100%;
    height: auto;
    z-index: 10;
}
.li1 {
    float: left;
    position: relative;
    width: 14%;
    height: auto; 
} 
        
        .li1 a {
    display: block;
    color: white;
    text-align: center;
    padding: 5% 15%;
    text-decoration: none;
}
.li1 a:hover:not(.active) {
    background-color: #4B3421;
    font-size:75%;
    padding:5%;
}
        
        .logo {
            width: 6%;
        }
        .banner {
            width: 100%;
            height: 25%;
            margin-top: 1%;
            
        }
        
        .procurar{
            width: 22%;
            height: 30%;
            margin-top: 16%;
            
        }
        
        
        .anuncio {
            background-color: #D7B78B;
            width: 15%;
            height: 40%;
            margin-left: 0.33%;
            font-family: monospace;
            position: absolute;
            font-size: 100%;
            float: left;
        }
        
        
         .janelaprincipal {
            width: 60%;
            background-color: #ccc;
            height: auto;
            margin-left: 16%;
            float: left;
            position: relative;
            padding-top: 4%; 
            padding-left: 6%;
            padding-right: 6%;
            padding-bottom: 4%;
            font-family: 'Flamenco', cursive;
              font-size: 120%;}
         
        .rodape{
    background-color: #000000;
    width: 98%;
    height: 45%;
    float: left;
    color: #ffffff;
    padding: 2%;
    height: 12%;
    font-family: Letter Gothic Std, serif;
    padding-top: 2%;
    padding-left: 0%;
    font-size: 70%;
    position: static;
}

 .credito{
            color: white;
            font-family: 'Flamenco', cursive;
            padding-bottom: 0.5%; 
            margin-top: 0.5%;
            font-size: 105%;
            float: center;
            
        
        }
        .sobrerodape{
            padding-top: 0.5%;
            padding-left: 10%;
            float: left;
            width: 40%;
        }
        
        .redes{
            width: 6%;
            height: 3%;
            margin-top: 2.2%;
            float: center;
           
            
            
        }
        
        .paginas1{
           
            width: 12%;
            height: 6%;
            margin-left: 65%;
            margin-top: 2%;
        }

        .paginas2{
           
            width: 12%;
            height: 6%;
            margin-left: 85%;
            margin-top: 2%;
            
            
        }
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
           
        <header>
            
            <ul class="li2">
            <li class="li1"><a href="index.html" title="INÍCIO">INÍCIO</a></li>
                
            <li class="li1"> <a href ="anidisp.php" title="ANIMAIS DISPONÍVEIS"> ANIMAIS DIPONÍVEIS</a></li>
                
            <li class="li1"><a href="doar.html" title="DOE UM BICHINHO">DOE UM BICHINHO</a></li>
                
            <li class="li1"><a href="faq.html" title="F.A.Q.">F.A.Q.</a></li>
                
            <li class="li1"><a href="quemsomos.html" title="QUEM SOMOS">QUEM SOMOS</a></li>
                
            <li class="li1"><a href="#janela1" rel="modal" title="LOGIN">LOGIN</a></li>
                
            <li class="lil"><img href="#" src="logo_mini.fw.png" title="Amigo Pet" alt="Amigo Pet"></li>
               
            </ul>
            
            
            <div class="banner">
            <img src="banner_pets.jpg" width="100%" height="15%" title="Animais Disponíveis" alt="Animais Disponíveis"></div>
            
        </header>
        
        
           <div class="anuncio">
        <center>Anúncio <br>
         
            <a href="http://vidaaoquadrado.ml">  <img src="Vida%C2%B2.jpg" width="95%" height="75%" title="Vida ao Quadrado Anúncio" alt="0Vida ao Quadrado Anúncio"></a>
 <a href="http://cosmaker.000webhostapp.com"> <img src="cosmaker_publi.gif" width="95%" height="75%" title="Cosmaker Anúncio" alt="Cosmaker Anúncio"></a></center>
        </div>
          
          <div class="janelaprincipal">
      <center>
            <H1> ANIMAIS DISPONÍVEIS </H1>
          
          
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
          </div>
        
         
        <div class="rodape">
            <div class="sobrerodape">
       SOBRE O SITE: <br>
            O Amigo Pet é um site sem fins lucrativos <br />composto por ONGs e voluntários protetores que atuam na defesa <br /> e bem estar animal. </div>
            
            
            <div class="paginas1">
            
                <p>
                <a style="text-decoration:none;color:white" href="anidisp.php" title="ADOTAR"> • Animais Disponíveis</a><br/>
                    <a style="text-decoration:none;color:white" href="doar.html" title="DOAR BICHINHO"> • Doar um bichinho</a><br/>
                    <a style="text-decoration:none;color:white" href="faq.html" title="F.A.Q."> • F.A.Q.</a>
                    
                </p>
            
            </div>
            
            <div class="paginas2">
            <p>
                <a style="text-decoration:none;color:white" href="quemsomos.html" title="QUEM SOMOS"> • Quem Somos</a> <br/>
                <a style="text-decoration:none;color:white" href="#janela1" rel="modal" title="LOGIN"> • Login</a>
                </p>
            </div>
            
            <center><div class="redes">
            <a href="https://pt-br.facebook.com/" > <img src="facebook.png" title="Facebook" width="27%" alt="Facebook" target="_blank"></a>
            <a href="https://twitter.com/login?lang=pt" > <img src="twitter.png" title="Twitter" width="27%" alt="Twitter" target="_blank"></a>
                
            </div> <!--div redes-->
                </center>
            
            
            <center> <div class="credito">Amigo Pet © 2017 - Todos os direito reservados - Designed by Grupo 2(dois), Programador Web - Senac, Plug Minas.</div></center> 
      </div>
      
        
    
        <!-----LOGIN----->
        
        <div class="window" id="janela1">
    <center><a href="#" class="fechar"><img src="fechar.png" width="6%" title="Fechar" alt="Fechar"></a>
    <h1>LOGIN</h1><br/>
        <form>
        <p> Usuário <input type="text" name="login" 
        id="login" placeholder="Nome do Usuário"  maxlength="30"></p><br/>
         
        <p>Senha <input type="password" id="senha" placeholder="Senha"  name="psw" maxlength="12"></p><br/>
         <input type="button" name="enter" onClick="entra()" value="Entrar">
        <input type="reset" name="Btlimpa" value="Limpar"><br/>
        
            <p><input id="Resp" readonly style="text-align:center;border:0px;background-color: #FFF;color:red;font-size:9pt;width: 70%;"></p>
        
            
        </form>
        Ainda não tem login? <br/><br/><a style="text-decoration:none;color:black" href="#" title="Cadastrar-se" alt="Cadastrar-se"><b>Cadastre-se.</b></a>
        </center>
</div>
 
 <!-- mascara para cobrir o site -->  
<div id="mascara"></div>
            
    </body>
</html>