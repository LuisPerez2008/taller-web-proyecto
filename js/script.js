

  

// BOTONES PARA CAMBIAR ---------------------------------------------
function cambiarFondo() { // Cambio 
    // Obtén el elemento body
    var body = document.body;

    // Cambia el fondo 
    body.style.backgroundColor = "#F1F8E9"; // #F1F8E9

    // Cambia el tipo de letra
    body.style.fontFamily = "Georgia, serif";
    // Cambia el tamaño del texto
    body.style.fontSize = "19px"; 

    // Cambia el color del texto
    body.style.color = "#cc5d4c ";          //#00897B
   
    // Obtén el elemento footer
    var footer = document.querySelector("footer");

    // Cambia los estilos del footer
    footer.style.backgroundColor = "#96b49c";                // Cambia el color de fondo del footer
    footer.style.color = "#5b5847 ";                      // Cambia el color del texto del footer
    
}



// VOLVER A LA NORMALIDAD ------------------------------------------------
function cambiarFondo2() { // Volver
    // Obtén el elemento body
    var body = document.body;

    // Reestablece el fondo a su estado original 
    body.style.backgroundColor = "white"; 
    
    // Reestablece el tipo de letra a su estado original
    body.style.fontFamily = "Arial, Helvetica, sans-serif"; 

    // Reestablece el tamaño del texto a su estado original
    body.style.fontSize = "16px"; 

    // Reestablece el color del texto a su estado original
    body.style.color = "black"; 

    // Obtén el elemento footer
    var footer = document.querySelector("footer");

    // Reestablece los estilos del footer a su estado original
    footer.style.backgroundColor = "#333"; 
    footer.style.color = "rgb(221, 217, 217)"; 
    
}




