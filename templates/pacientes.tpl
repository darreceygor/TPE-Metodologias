
{include file = 'header.tpl'}

<table  class="list">
<br>
<h4>SACAR TURNO</h4>
<br>
<form id="buscar" method="POST" >

    <div class="form-group">
        <label>Seleccionar Médico</label>
            <select name="selectMedico" id="selectDoc">
              <option disable>Elegir...</option>
              <option >Dr. Gonzalez</option>
              <option >Dr. Morón</option>
              <option >Dr. Ramirez</option>
              <option >Dr. Paez</option>
                                               
            </select>

     </div>
     <div class="form-group">
     <label>Seleccionar Obra Social</label>
         <select name="selectObraSocial" id="selectObraSocial">
           <option disable>Elegir...</option>
           <option >Osde</option>
           <option >SwissMedical</option>
           <option >Osecac</option>
           <option >Ospe</option>
                                            
         </select>

  </div>
  <button class="btn btn-outline-primary">BUSCAR TURNOS</button>
</form>
</table>





<div  id="ajax-contenedor2">
    
</div>




    {include file = 'footer.tpl'}