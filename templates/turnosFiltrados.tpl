

<table  class="list">
    <tbody>
        <thead>
    <tr>
        <th >Turno</th>
        <th >Nombre</th>
        <th >Apellido</th>
        <th >Médico</th>
        <th >Fecha  -  Hora</th>  
        <th >Cancelar</th>      
    
    </tr>
    <thead>

    {foreach from=$turnos item=$info}    
    
    <form name="formulario" method="POST">
        <tr>
            <td>{$info->id_turno}</td>
            <td>{$info->nombre}</td>
            <td>{$info->apellido}</td>
            <td>{$info->medico}</td>
            <td>{$info->hora}</td>
            <td><a id="boton{$info->id_turno}" class="btn btn-danger" href="borrar/{$info->id_turno}">Cancelar</a></td>      
              
        </tr>
    </form>

 {/foreach}

</tbody>   
 </table>

 



         
   
    

   
        
  