<!DOCTYPE html>
<html lang="en">
{include file="templates/templatesPart/head.tpl"}

<body>
    {include file="templates/templatesPart/header.tpl"}
    {include file="templates/templatesPart/viewCellar.tpl"}
    {if !empty($products)}
        {include file="templates/templatesPart/tableWine.tpl"}
    {else}
        {include file="templates/templatesError/errorSinElement.tpl"}
    {/if}
    {include file="templates/templatesPart/buttonBackCellar.tpl"}
    {include file="templates/templatesPart/footer.tpl"}
</body>

</html>