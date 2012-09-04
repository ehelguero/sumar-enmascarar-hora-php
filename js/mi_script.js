$(document).on("ready", evento);
  
function valida(valor)
  {
     //que no existan elementos sin escribir
     if(valor.indexOf("_") == -1)
     {
        var hora = valor.split(":")[0];
        if(parseInt(hora) > 23 )
        {
             $("#time").val("");
        }
     }
  }

function evento (ev){
  $('#form_calc').submit(function(event){  
    event.preventDefault();  
    var url = $(this).attr('action');  
    var datos = $(this).serialize();	   
    $.get(url, datos, function(resultado){  	    
      if($.trim(resultado)!="Error"){
        $('#resultado').html(resultado); 
        $('#resultado').show();
        $('.exito').show();
        $('.error').hide();
      }else{
        $('.error').show(); 
        $('.exito').hide();
        $('#resultado').hide();
      }	    
  	});
  });
  $.mask.definitions['H']='[012]';
  $.mask.definitions['N']='[012345]';
  $.mask.definitions['n']='[0123456789]';
  $("#time").mask("Hn:Nn");
}