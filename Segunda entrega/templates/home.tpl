<!DOCTYPE html>
<html lang="en">
{include file="./templatesPart/head.tpl"}
<body>
{include file="./templatesPart/header.tpl"}
{if ($update != null)}
    {include file="./templatesPart/upDateMensage.tpl"}
{/if}
{include file="./templatesPart/tableWine.tpl"}
{include file= "./templatesPart/buttonAddWine.tpl"}
{include file="./templatesPart/footer.tpl"}
</body>
</html>