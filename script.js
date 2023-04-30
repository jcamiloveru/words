function seeFormAdd(){
   alert("good")
}

var miDiv = document.getElementById("miDiv"); //Obtener referencia al div por su ID

miDiv.style.display = "block"; //Cambiar el estilo del div para mostrarlo

setTimeout(function(){ //Después de 3 segundos, volver a ocultar el div
  miDiv.style.display = "none";
}, 3000);
