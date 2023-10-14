{if !empty($tituloLista)}
    <h3 class="titulo">{$tituloLista}</h3>
{/if}
<table class="table table-hover">
    <thead>
        <tr>
            {foreach from=$products[0] item=item key=key}
                {if ($key != "id")}
                    <th class="encabezado-table">{$key}</th>
                {/if}
            {/foreach}
            {if $userAdmin}               
                <th class="encabezado-table">Acciones</th>
            {/if}
        </tr>
    </thead>
    <tbody>
        {foreach from=$products item= prod}
            <tr>
                {foreach from=$prod item=item key=key}
                    {if ($key != "id")}
                        {if ($key != "nombre")}
                            <td class="fila-tabla">{$prod->$key}</td>
                        {{else}}
                            <td class="fila-tabla" ><a class="col-nombre" href="{BASE_URL}wine/{$prod->id}">{$prod->$key}</a></td>
                        {/if}
                    {/if}
                {/foreach}

                {if $userAdmin}
                    <td class="fila-tabla">
                        <a type="button" class="btn btn-success" href="{BASE_URL}modifyWine/{$prod->id}">Modificar</a>
                        <a type="button" class="btn btn-danger" href="{BASE_URL}deleteWine/{$prod->id}">Eliminar</a>
                    </td>
                    
                {/if}
            </tr>
        {/foreach}
    </tbody>
</table>