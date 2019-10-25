//------------VALIDACIONES----------
//Esperamos a que la pagina se cargue entera
$(document).ready(function() {
    //Por cada pulsacion de teclado realizada en un input se ejecutara la funcion
    $('input').keyup(function(){
        //Recogemos los datos necesarios
        let nombre = document.getElementById("nombre");
        let foto = document.getElementById("foto");
        let descripcion = document.getElementById("descripcion");
        let precio = document.getElementById("precio");
        let stock = document.getElementById("stock");
        let enlace = document.getElementById("enlace");
        let p = document.getElementById("p");
        let boton = document.getElementById("añadir");
        /*Comprobamos si los datos son validos si no es asi pone el boton deshabilitado 
         *y muestra porque no es valido
         */
        if (vacio(nombre.value)) {
            p.innerHTML = "No puedes dejar el nombre vacio";
            boton.disabled = true;
        }
        else if (vacio(foto.value)){
            p.innerHTML = "No puedes no añadir foto (En caso de añadirla y seguir el mensaje no hacer caso)"
            boton.disabled = true;
        }
        else if (vacio(descripcion.value)) {
            p.innerHTML = "No puedes dejar la descripcion vacia";
            boton.disabled = true;
        }
        else if (tieneSimbolosNombre(nombre.value)){
            p.innerHTML = "Los nombres solo pueden tener letras, numeros o guiones";
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
        /*Una vez todos los datos son validos pone el boton
         *En modo habilitado y elimina el mensaje
         */
        else { 
            p.innerHTML = "";
            boton.disabled = false;
        }
    });
});
//--------Funciones que comprueba los datos--------
//Funcion que comprueba si un dato tiene letras
let tieneLetras = (texto) => {
    //Creamos un string con las letras
    const letras = "abcdefghijklmnñopqrstuvwxyzABCDEFGHIJKLMNÑOPQRSTUVWXYZ";
    //Bucle que comprueba si en el texto hay letras al leerlo caracter por caracter y compararlo con el string de antes    
    for(i=0; i < texto.length; i++){
        if (letras.indexOf(texto.charAt(i),0) != -1){
            return true;
        }
    }
    return false;
}
//Funcion que comprueba si hay numeros en el dato que le introduzcamos
let tieneNumeros = (texto) => {
    //Creamos un string con los numeros
    const numeros = "0123456789";
    //Bucle que comprueba si en el texto hay numeros al leerlo digito por digito y compararlo con el string de antes
    for(i=0; i < texto.length; i++){
        if (numeros.indexOf(texto.charAt(i),0) != -1){
            return true;
        }
    }
    return false;
}
//Funcion que comprueba si hay simbolos en el dato que le introduzcamos
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
//Funcion que comprueba si hay simbolos en el nombre que le introduzcamos, pero permite los guiones
let tieneSimbolosNombre = (texto) => {
    //Creamos un string con los simbolos
    const numeros = "!¡=?¿.,/º&%$'_;:<>[]{}";
    //Bucle que comprueba si en el texto hay simbolos al leerlo digito por digito y compararlo con el string de antes
    for(i=0; i < texto.length; i++){
        if (numeros.indexOf(texto.charAt(i),0) != -1){
            return true;
        }
    }
    return false;
}
//Funcion que comprueba si hay simbolos en el precio que le introduzcamos, pero permite los puntos
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
//Funcion que comprueba si hay espacios en el dato que le introduzcamos
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
//Funcion que cuneta los numeros decimales del dato que le introduzcamos
let numeroDecimales = (texto) => {
    var str = "" + texto;
    var index = str.indexOf('.');
    if (index >= 0) {
        return str.length - index - 1;
    } else {
        return 0;
    }
}
/*Funcion que comprueba si el dato que le introducimos es una URL
 *Al comprobar si dispone de tres w y dos puntos
 */
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