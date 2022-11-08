
let select = document.querySelector("#selectMedico");
select.addEventListener("change", seleccionarMedico);

async function seleccionarMedico() {

    let medico = select.value
    try {
        let response = await fetch(`http://localhost/proyectos/AppTurnoFacil/TPE-Metodologias/buscar/${medico}`);
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





