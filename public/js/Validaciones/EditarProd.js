//------------VALIDACIONES----------
$(document).ready(function() {
    $('input').keyup(function(){
        let descripcion = document.getElementById("descripcion");
        let precio = document.getElementById("precio");
        let stock = document.getElementById("stock");
        let enlace = document.getElementById("enlace");
        let p = document.getElementById("p");
        let boton = document.getElementById("añadir");
        if (vacio(descripcion.value)) {
            p.innerHTML = "No puedes dejar la descripcion vacia";
            boton.disabled = true;
        }
        else if (vacio(precio.value)){
            p.innerHTML = "No puedes dejar el precio vacio ni puede tener letras";
            boton.disabled = true;
        }
        else if (tieneSimbolosPrecio(precio.value)){
            p.innerHTML = "Los precios solo pueden tener numeros y dos decimales (usar . en vez de ,)";
            boton.disabled = true;
        }
        else if (precio.value < 0){
            p.innerHTML = "El precio debe ser positivo";
            boton.disabled = true;
        }
        else if (numeroDecimales(precio.value) > 2){
            p.innerHTML = "El numero maximo de decimales del precio es 2";
            boton.disabled = true;
        }
        else if (tieneBlanco(precio.value)){
            p.innerHTML = "El precio no puede tener espacios";
            boton.disabled = true;
        }
        else if (vacio(stock.value)){
            p.innerHTML = "No puedes dejar el stock vacio ni puede tener letras";
            boton.disabled = true;
        }
        else if (numeroDecimales(stock.value) != 0){
            p.innerHTML = "El stock no puede tener decimales";
            boton.disabled = true;
        }
        else if (stock.value < 0){
            p.innerHTML = "El stock debe ser positivo";
            boton.disabled = true;
        }
        else if (vacio(enlace.value)){
            p.innerHTML = "No puedes dejar el enlace";
            boton.disabled = true;
        }
        else if (!esURL(enlace.value)){
            p.innerHTML = "La URL no es valida";
            boton.disabled = true;
        }
        else { 
            p.innerHTML = "";
            boton.disabled = false;
        }
    });
});
let tieneLetras = (texto) => {
    //Creamos un string con los numeros
    const letras = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    //Bucle que comprueba si en el texto hay numeros al leerlo  letra por letra y compararlo con el string de antes
    for(i=0; i < texto.length; i++){
        if (letras.indexOf(texto.charAt(i),0) != -1){
            return true;
        }
    }
    return false;
}
//Funcion que comprueba si hay numeros en el texto que le introduzcamos
let tieneNumeros = (texto) => {
    //Creamos un string con los numeros
    const numeros = "0123456789";
    //Bucle que comprueba si en el texto hay numeros al leerlo  letra por letra y compararlo con el string de antes
    for(i=0; i < texto.length; i++){
        if (numeros.indexOf(texto.charAt(i),0) != -1){
            return true;
        }
    }
    return false;
}
//Funcion que comprueba si hay simbolos en el texto que le introduzcamos
let tieneSimbolos = (texto) => {
    //Creamos un string con los simbolos
    const numeros = "!¡=?¿.,/º&%$'-_;:<>[]{}";
    //Bucle que comprueba si en el texto hay simbolos al leerlo letra por letra y compararlo con el string de antes
    for(i=0; i < texto.length; i++){
        if (numeros.indexOf(texto.charAt(i),0) != -1){
            return true;
        }
    }
    return false;
} 
//Funcion que comprueba si hay simbolos en el texto que le introduzcamos, pero permite los guiones
let tieneSimbolosNombre = (texto) => {
    //Creamos un string con los simbolos
    const numeros = "!¡=?¿.,/º&%$'_;:<>[]{}";
    //Bucle que comprueba si en el texto hay simbolos al leerlo letra por letra y compararlo con el string de antes
    for(i=0; i < texto.length; i++){
        if (numeros.indexOf(texto.charAt(i),0) != -1){
            return true;
        }
    }
    return false;
}
//Funcion que comprueba si hay simbolos en el texto que le introduzcamos, pero permite los puntos
let tieneSimbolosPrecio = (texto) => {
    //Creamos un string con los simbolos
    const numeros = "!¡=?¿,/º&%$'-_;:<>[]{}";
    //Bucle que comprueba si en el texto hay simbolos al leerlo letra por letra y compararlo con el string de antes
    for(i=0; i < texto.length; i++){
        if (numeros.indexOf(texto.charAt(i),0) != -1){
            return true;
        }
    }
    return false;
}
//Funcion que comprueba si hay espacios en el texto que le introduzcamos
let tieneBlanco = (texto) => {
    //Creamos un string con el espacio
    const espacio = " ";
    //Bucle que comprueba si en el texto hay espacios al leerlo letra por letra y compararlo con el string de antes
    for(i=0; i < texto.length; i++){
        if (espacio.indexOf(texto.charAt(i),0) != -1){
            return true;
        }
    }
    return false;
} 
//Funcion que comprueba si se ha escrito algo o no
let vacio = (texto) => {
    if (!texto)
        return true;
    
    else 
        return false;
}
let numeroDecimales = (texto) => {
    var str = "" + texto;
    var index = str.indexOf('.');
    if (index >= 0) {
        return str.length - index - 1;
    } else {
        return 0;
    }
}
let esURL = (texto) => {
    let w = 'w';
    var contw = 0;
    let punto = '.';
    var contPunto = 0;
    for(i=0; i < texto.length; i++){
        if (w.indexOf(texto.charAt(i),0) != -1)
            contw++;
        if (punto.indexOf(texto.charAt(i),0) != -1)
            contPunto++
    }
    if (contw == 3 && contPunto == 2)
        return true
    else
        return false
}