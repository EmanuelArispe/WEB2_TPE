<!DOCTYPE html>
<html lang="en">
{include file="./templatesPart/head.tpl"}
<body>
{include file="./templatesPart/header.tpl"}
{if $error}
    {include file="./templatesPart/notUpDateMensage.tpl"}
{/if}
{include file="./templatesPart/formModify.tpl"}
{include file="./templatesPart/footer.tpl"}
</body>
</html>