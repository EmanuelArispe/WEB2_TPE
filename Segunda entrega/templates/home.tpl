<!DOCTYPE html>
<html lang="en">
{include file="./templatesPart/head.tpl"}

<body>
    {include file="./templatesPart/header.tpl"}

    {if ($updata != null)}
        {include file="./templatesPart/upDataMensage.tpl"}
    {/if}

    {include file="./templatesPart/tableWine.tpl"}

    {if $userAdmin}
        {include file= "./templatesPart/buttonAddWine.tpl"}
    {/if}
    
    {include file="./templatesPart/footer.tpl"}
</body>

</html>