<h3>{$tituloLista}</h3>
<table class="table table-hover">
    <thead>
        <tr>
        {foreach from=$products[0] item=item key=key}
            {if ($key != "id")}
                <th>{$key}</th>
            {/if}
        {/foreach}
        </tr>
    </thead>
    <tbody>
        <tr>
        {foreach from=$products item= prod}
            {foreach from=$prod item=item key=key}
                {if ($key != "id")}
                    <td>{$prod->$key}</td>  
                {/if}  
            {/foreach}
        {/foreach}
        </tr>
    </tbody>
</table>