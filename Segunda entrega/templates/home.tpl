<!DOCTYPE html>
<html lang="en">
{include file="./templatesPart/head.tpl"}

<body>
    {include file="./templatesPart/header.tpl"}

    {if ($updata != null)}
        {include file="./templatesPart/upDataMensage.tpl"}
    {/if}

    {if !empty($products)}
        {include file="./templatesPart/tableWine.tpl"}

    {else}
        {include file="templates/templatesError/errorSinElement.tpl"}
    {/if}

    {if $userAdmin}
        {include file= "./templatesPart/buttonAddWine.tpl"}
    {/if}

    {include file="./templatesPart/footer.tpl"}
</body>

</html>