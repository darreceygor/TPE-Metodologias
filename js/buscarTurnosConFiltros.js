
let btn = document.getElementById('buscar');
btn.addEventListener("submit", test);
let selectMedico = document.getElementById("selectDoc");
let selectObraSocial = document.getElementById("selectObraSocial");



 async function test(e) {
    e.preventDefault();

    let Medico = selectMedico.value
    let ObraSocial= selectObraSocial.value
     
    try {
        let response = await fetch(`http://localhost/proyectos/AppTurnoFacil/TPE-Metodologias/buscarDisponibles/${Medico}/${ObraSocial}`);
        if (response.ok) {
            let html = await response.text();                          
            document.querySelector("#ajax-contenedor2").innerHTML = html;
        } else {
            document.querySelector("#ajax-contenedor2").innerHTML = "Fallo URL";
        }
    }
    catch (error) {
        console.log(error);
        document.querySelector("#ajax-contenedor2").innerHTML = "Error al solicitar";
    }

}





