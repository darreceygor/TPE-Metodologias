{include file = 'header.tpl'}



<div  class="flex-container">

        <div>
            <form  method="POST" class="row g-3" action="verify">
                 <div class="col-auto">
                    <input required="required" type="text" name="dni" class="form-control" id="" placeholder="Ingrese su DNI">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-outline-primary">INICIAR SESION</button>
                   
                </div>
            </form>
        </div>

    <div>
    <img src="img/fotoPortada.png" > 
    </div>

</div>




{include file = 'footer.tpl'}