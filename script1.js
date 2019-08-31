$(document).ready(function(){
    $("a[rel=modal]").click( function(ev){
        ev.preventDefault();
 
        var id = $(this).attr("href");
 
        var alturaTela = $(document).height();
        var larguraTela = $(window).width();
     
        //colocando o fundo preto
        $('#mascara').css({'width':larguraTela,'height':alturaTela});
        $('#mascara').fadeIn(1000); 
        $('#mascara').fadeTo("slow",0.8);
 
        var left = ($(window).width() /2) - ( $(id).width() / 2 );
        var top = ($(window).height() / 2) - ( $(id).height() / 2 );
     
        $(id).css({'top':top,'left':left});
        $(id).show();   
    });
 
    $("#mascara").click( function(){
        $(this).hide();
        $(".window").hide();
    });
 
    $('.fechar').click(function(ev){
        ev.preventDefault();
        $("#mascara").hide();
        $(".window").hide();
    });
});



/*---------SCRIPT DE VETOR DO LOGIN---------*/


function entra(){
    var nome= new Array(1);
    var pwd= new Array(1);
    nome= ["Programador"];
    pwd= ["web"];
    var senha=document.getElementById("senha").value;
    var login=document.getElementById("login").value;
    var x;
    for (x=0;x<nome.length;x++){
      if (login==nome[x] && senha==pwd[x])
      { 
              location.href="#";
      }
        else{
        document.getElementById("Resp").value=("Seu usuário ou senha estão incorretos");
             }
      }
}








