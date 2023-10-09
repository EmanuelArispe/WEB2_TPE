<h3>{$tituloLista}</h3>
<table class="table table-hover">
    <thead>
        <tr>
            {foreach from=$products[0] item=item key=key}
                {if ($key != "id")}
                    <th>{$key}</th>
                {/if}
            {/foreach}
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        {foreach from=$products item= prod}
            <tr>
                {foreach from=$prod item=item key=key}
                    {if ($key != "id")}
                        {if ($key != "Nombre")}
                            <td>{$prod->$key}</td>
                        {{else}}
                            <td><a href="{BASE_URL}wine/{$prod->id}">{$prod->$key}</a></td>
                        {/if}
                    {/if}
                {/foreach}
                <td>
                    <a type="button" class="btn btn-success" href="{BASE_URL}modifyWine/{$prod->id}">Modificar</a>
                    <a type="button" class="btn btn-danger" href="{BASE_URL}deleteWine/{$prod->id}">Eliminar</a>
                </td>
            </tr>
        {/foreach}
    </tbody>
</table>