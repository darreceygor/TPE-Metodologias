

<table  class="list">
    <tbody>
        <thead>
    <tr>
        <th >Turno</th>
        <th >Nombre</th>
        <th >Apellido</th>
        <th >Médico</th>
        <th >Obra Social</th>
        <th >Fecha</th>  
        <th >Hora</th>  
           
    
    </tr>
    <thead>

    {foreach from=$turnos item=$info}    
    
    <form name="formulario" method="POST">
        <tr>
            <td>{$info->id_turno}</td>
            <td>{$info->nombre}</td>
            <td>{$info->apellido}</td>
            <td>{$info->medico}</td>
            <td>{$info->obraSocial}</td>
            <td>{$info->fecha}</td>
            <td>{$info->hora}</td>
             
        </tr>
    </form>

 {/foreach}

</tbody>   
 </table>

 



         
   
    

   
        
  