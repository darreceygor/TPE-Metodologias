/*let form = document.querySelector("#form");
form.addEventListener('submit', MostrarTurnos);

let formTurnos = document.querySelector("#formTurnos");
formTurnos.addEventListener('submit', cancelarTurno);

async function MostrarTurnos(e) {    
    e.preventDefault();    
    try {
      
        let response = await fetch(`http://localhost/proyectos/TurnoFacil/buscar`);
        let nTurnos = await response.text();
        document.querySelector("#ajax-contenedor").innerHTML = nTurnos;         
    }
    catch (error) {
        console.log(error);
    }
}
*/

let select = document.querySelector("#selectMedico");
select.addEventListener("change", seleccionarMedico);

async function seleccionarMedico() {

    let medico = select.value
    try {
        let response = await fetch(`http://localhost/proyectos/TurnoFacil/buscar/${medico}`);
        if (response.ok) {
            let html = await response.text();
            document.querySelector("#ajax-contenedor").innerHTML = html;
        } else {
            document.querySelector("#ajax-contenedor").innerHTML = "Fallo URL";
        }
    }
    catch (error) {
        console.log(error);
        document.querySelector("#ajax-contenedor").innerHTML = "Error al solicitar";
    }
}





