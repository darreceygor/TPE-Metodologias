
{include file = 'header.tpl'}

<table  class="list">
<br>
<h4>Cancelar turnos</h4>
<br>
<form id="form" method="POST">
<label>Fecha </label>
<input name="fecha" id="fecha" type="date" min="2000-01-01" max=""/>

    <div class="form-group">
        <label>Seleccionar Médico</label>
            <select name="select" id="selectMedico">
              <option disable>Elegir...</option>
              <option >Dr. Gonzalez</option>
              <option >Dr. Morón</option>
              <option >Dr. Ramirez</option>
              <option >Dr. Paez</option>
                                               
            </select>

   

   </div>
    
    
</form>
</table>

<div  id="ajax-contenedor">
    
</div>






    {include file = 'footer.tpl'}