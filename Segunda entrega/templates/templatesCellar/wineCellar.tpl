<!DOCTYPE html>
<html lang="en">
{include file="templates/templatesPart/head.tpl"}

<body>
    {include file="templates/templatesPart/header.tpl"}
    {if !empty($products)}
        {include file="templates/templatesPart/tableCellar.tpl"}
    {else}
        {include file="templates/templatesError/errorSinElement.tpl"}
    {/if}

    {if $userAdmin}
        {include file= "templates/templatesPart/buttonAddCellar.tpl"}
    {/if}
    {include file="templates/templatesPart/footer.tpl"}
</body>

</html>