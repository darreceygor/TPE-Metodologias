
let fecha = document.querySelector("#fecha")
let select = document.querySelector("#selectMedico");


select.addEventListener("change", seleccionarMedico);

async function seleccionarMedico() {

    let medico = select.value   
    let fechaElegida= fecha.value
    try {
        let response = await fetch(`http://localhost/TPE-Metodologias/buscar/${medico}/${fechaElegida}`);
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

