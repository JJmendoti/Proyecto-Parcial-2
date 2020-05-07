function validate() {


    let Name = document.getElementById("Name").value;
    let Lastname = document.getElementById("Lastname").value;
    let Document = document.getElementById("Document").value;
    let Birthdate = document.getElementById("Birthdate").value;
    let City = document.getElementById("City").value;
    let Neighborhood = document.getElementById("Neighborhood").value;
    let Cellphonenumber = document.getElementById("Cellphonenumber").value;


    if (Name === "") {
        alert("Para continuar Debe llenar el campo Name");
        return false;

    } else if (Lastname === "") {
        alert("Para continuar Debe llenar el campo Lastname");
        return false;
    } else if (Document === "") {
        alert("Para continuar Debe llenar el campo Document");
        return false;
    } else if (isNaN(Document)) {
        alert("Para continuar El campo  Document debe ser numerico");
        return false;
    } else if (Birthdate === "") {
        alert("Para continuar Debe llenar el campo Birthdate");
        return false;

    } else if (City === "") {
        alert("Para continuar Debe llenar el campo City_of_residence");
        return false;
    } else if (Neighborhood === "") {
        alert(" Para continuar Debe llenar el campo Neighborhood");
        return false;
    } else if (Cellphonenumber === "") {
        alert("Para continuar Debe llenar el campo Cell phone number");
        return false;

    } else if (isNaN(Cellphonenumber)) {
        alert("Para continuar El campo  Cell phone numbe debe ser numerico");
        return false;
    } else if (Cellphonenumber.length > 10) {
        alert("Para continuar El campo  Cell phone numbe es muy largo, ingrese solo 10 Digitos");
        return false;
    } else if (Cellphonenumber.length < 10) {
        alert("Para continuar El campo  Cell phone numbe es muy corto, ingrese los 10 Digitos");
        return false;
    }
}

function Confirm_Ship() {

    let date = document.getElementById("date").value;
    let documentpatient = document.getElementById("documentpatient").value;

    if (date === "") {
        alert("Para continuar Debe llenar el campo  DATE");
        return false;
    } else if (documentpatient === "") {

        alert("Para continuar Debe llenar el campo  DOCUMENT");
        return false;
    } else if (isNaN(documentpatient)) {

        alert("Para continuar El campo Document debe ser numerico");
        return false;
    }

}


function AlertDelet() {

    let action = confirm("¡IMPORNTANTE! ¿Estás seguro de eliminar el Registro?");

    if (action == true) {

        alert("El Registro se ha Eliminado Satisfactoriamente");
        return true;
    } else {

        alert("Has cancelado la acción de Eliminar!");
        return false;
    }
}