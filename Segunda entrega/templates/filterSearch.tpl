<form action="search" method="POST">
<select class="form-select" aria-label="Default select example">
  <option selected>{$bodegas}</option>
  {foreach from=$wineStore item=item key=key}
    <option>{$item->nombre}</option>
  {/foreach}
</select>
<input type="submit" value="Buscar">
</form>
