{include file = 'header.tpl'}


<h2>
ACCESO PRIVADO 
</h2>

<div  class="flex-container">

        <div>
            <form  method="POST" class="row g-3" action="turnos">
                 <div class="col-auto">
                    <input type="text" name="dni" class="form-control" id="" placeholder="Ingrese Usuario">
                </div>
                <div class="col-auto">
                <input  type="text" name="dni" class="form-control" id="" placeholder="Ingrese contraseña">
            </div>
                <div class="col-auto">
                    <button class="btn btn-outline-primary">INICIAR SESION</button>
                </div>
            </form>
        </div>

    <div>
    <img src="img/fotoLogin.png" > 
    </div>

</div>




{include file = 'footer.tpl'}
