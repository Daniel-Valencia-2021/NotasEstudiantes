function ValidarDatos() {
    
  let profe = document.getElementById("ValidarProfe");

if (profe.checked) {
   codigo = prompt("Ingrese el codigo de verificacion de profesor");
}

if (codigo == 123) {
    alert("Perfecto");
    return true;
}else{
    alert("Codigo invalido porfavor introduza el correcto");
    return false;
}

}