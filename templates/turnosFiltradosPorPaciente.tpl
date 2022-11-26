{include file = "modal.tpl"}

<table  class="list">
    <tbody>
        <thead>
    <tr>
        <th >Nombre</th>
        <th >Apellido</th>
        <th >Email</th>
        <th >Obra Social</th>
        <th >Fecha</th>  
        <th >Hora</th>
        <th >Especialidad</th>  
           
    
    </tr>
    <thead>

    {foreach from=$turnos item=$info}    
    
    <form name="formulario" method="POST">
        <tr>
            <td>{$info->nombre}</td>
            <td>{$info->apellido}</td>
            <td>{$info->email}</td>
            <td>{$info->obra_social}</td>
            <td>{$info->fecha_turno}</td>
            <td>{$info->hora_turno}</td>
            <td>{$info->especialidad}</td>
            <td><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal"
        data-bs-whatever="@mdo">Sacar turno</button></td>
        </tr>
             
        </tr>
    </form>

 {/foreach}

</tbody>   
 </table>

 



         
   
    

   
        
  