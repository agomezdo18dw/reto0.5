//VALIDACIONES
let comprobaciones = () => {
    let nombre = document.getElementById("nombre");
    let descripcion = document.getElementById("foto");
    let precio = document.getElementById("precio");
    let stock = document.getElementById("stock");
    let enlace = document.getElementById("enlace");
    console.log('todo ok');
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
//Funcion que comprueba si se ha seleccionado algun material
let valMat = () => {
    let material = document.getElementById("material");
    if (material.selectedIndex == 0)
        return true;
    
    else 
        return false;
}
//Funcion que comprueba si se ha seleccionado algun tamaño
let valTam = () => {
    let tamaño = document.querySelectorAll("input[type='radio']");
    let cont = 1;
    for(i=0;i<tamaño.length;i++){
        if (tamaño[i].checked == true)
            cont--;
    }
    if (cont == 0)
        return false;
    else
        return true;
}