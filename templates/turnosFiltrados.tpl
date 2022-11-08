

<table  class="list">
    <tbody>
        <thead>
    <tr>
        <th >Turno</th>
        <th >Nombre</th>
        <th >Apellido</th>
        <th >Médico</th>
        <th >Fecha  -  Hora</th>      
    </tr>
    <thead>

    {foreach from=$turnos item=$info}    
        {if $filtro == $info->medico}
    <form name="formulario" method="POST">
        <tr>
            <td>{$info->id_turno}</td>
            <td>{$info->nombre}</td>
            <td>{$info->apellido}</td>
            <td>{$info->medico}</td>
            <td>{$info->hora}</td>          
              
        </tr>
    </form>
{/if}
 {/foreach}

</tbody>   
 </table>

 



         
   
    

   
        
  