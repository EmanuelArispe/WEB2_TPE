<!DOCTYPE html>
<html lang="en">
{include file="templates/templatesPart/head.tpl"}
<body>
{include file="templates/templatesPart/header.tpl"}
{if $mensaje != null}
    {include file="templates/templatesPart/notUpDateMensage.tpl"}
{/if}
{include file="templates/templatesPart/formAddWine.tpl"}
{include file="templates/templatesPart/footer.tpl"}
</body>