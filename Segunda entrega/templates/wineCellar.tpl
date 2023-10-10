<!DOCTYPE html>
<html lang="en">
{include file="./templatesPart/head.tpl"}
<body>
{include file="./templatesPart/header.tpl"}
{include file="./templatesPart/tableCellar.tpl"}
{if $button}
    {include file="./templatesPart/buttonBackCellar.tpl"}
{/if}
{include file= "./templatesPart/buttonAddCellar.tpl"}
{include file="./templatesPart/footer.tpl"}
</body>
</html>