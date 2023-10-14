{if (!empty($products))}
    <h3 class="titulo">{$tituloLista}</h3>
    <table class="table table-hover">
        <thead>
            <tr>
                {foreach from=$products[0] item=item key=key}
                    {if ($key != "id_bodega")}
                        <th class="encabezado-table">{$key}</th>
                    {/if}
                {/foreach}
                {if $userAdmin}
                    <th class="encabezado-table">Acciones </th>
                {/if}
            </tr>
        </thead>
        <tbody>
            {foreach from=$products item= prod}
                <tr>
                    {foreach from=$prod item=item key=key}
                        {if ($key != "id_bodega")}
                            {if ($key != "Nombre")}
                                <td class="fila-tabla">{$prod->$key}</td>
                            {else}
                                <td class="fila-tabla"><a class="col-nombre" href="{BASE_URL}search/{$prod->id_bodega}">{$prod->Nombre}</a></td>
                            {/if}
                        {/if}
                    {/foreach}
                    {if $userAdmin}
                        {if (isset($prod->id))}
                            <td class="fila-tabla">
                                <a type="button" class="btn btn-success" href="{BASE_URL}modifyWine/{$prod->id}">Modificar</a>
                                <a type="button" class="btn btn-danger" href="{BASE_URL}deleteWine/{$prod->id}">Eliminar</a>
                            </td>
                        {else}
                            <td class="fila-tabla">
                                <a type="button" class="btn btn-success" href="{BASE_URL}modifyCellar/{$prod->id_bodega}">Modificar</a>
                                <a type="button" class="btn btn-danger" href="{BASE_URL}deleteCellar/{$prod->id_bodega}">Eliminar</a>
                            </td>

                        {/if}
                    {/if}
                </tr>
            {/foreach}
        </tbody>
    </table>

{else}
    <h3 class="titulo">La bodega selecionada no tiene vinos cargados</h3>
{/if}