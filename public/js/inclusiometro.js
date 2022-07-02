var respuesta1 = '​Genero ambientes accesibles y equitativos ¡Soy una persona inclusiva!'
var respuesta2 = '​​Tengo una actitud respetuosa ¡Estoy en camino a la inclusión!'
​var respuesta3 = '¡Alerta! Mi actitud puede ser excluyente. Requiero informarme'


function inclusiometro(concepto){ 
    
    document.getElementById('resultado').innerHTML = concepto;

}

document.getElementById('actitud1').onclick = function(){
    inclusiometro(respuesta1);
}

document.getElementById('actitud2').onclick = function(){
    inclusiometro(respuesta2);
}

document.getElementById('actitud3').onclick = function(){
    inclusiometro(respuesta3);
}
