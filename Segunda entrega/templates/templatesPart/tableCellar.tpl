{if (!empty($products))}
    <h3>{$tituloLista}</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                {foreach from=$products[0] item=item key=key}
                    {if ($key != "id") && ($key != "id_bodega")}
                        <th>{$key}</th>
                    {/if}
                {/foreach}
                <th>Acciones </th>
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item= prod}
                <tr>
                    {foreach from=$prod item=item key=key}
                        {if ($key != "id") && ($key != "id_bodega")}
                                <td>{$prod->$key}</td>
                            {{else}}
                                <td><a href="{BASE_URL}search/{$prod->$key}">{$prod->Nombre}</a></td>
                        {/if}
                    {/foreach}
                    {if (isset($prod->id))}
                        <td>
                            <a type="button" class="btn btn-success" href="{BASE_URL}modifyWine/{$prod->id}">Modificar</a>
                            <a type="button" class="btn btn-danger" href="{BASE_URL}deleteWine/{$prod->id}">Eliminar</a>
                        </td>
                    {else}
                        <td>
                            <a type="button" class="btn btn-success" href="{BASE_URL}modifyCellar/{$prod->id_bodega}">Modificar</a>
                            <a type="button" class="btn btn-danger" href="{BASE_URL}deleteCellar/{$prod->id_bodega}">Eliminar</a>
                        </td>

                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>

{else}
    <h3>La bodega selecionada no tiene vinos cargados</h3>
{/if}