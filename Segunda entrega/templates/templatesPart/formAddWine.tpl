<h3>{$tituloLista}</h3>
<form class="row g-3" action="newAddWine" method="POST">
    <div class="col-md-2">
        <label class="form-label">Nombre</label>
        <input type="text" class="form-control"  name="nombre">
    </div>
    <div class="col-md-2">
        <label class="form-label">Bodegas</label>
        <select  class="form-select" name= "bodega">
            {foreach from=$listCellar item=$cellar}               
                <option value="{$cellar->nombre}">{$cellar->nombre}</option>
            {/foreach}
        </select>
    </div>
    <div class="col-md-1">
        <label class="form-label">Año</label>
        <input type="number" class="form-control" name="anio">
    </div>
    <div class="col-md-2">
        <label class="form-label">Maridaje</label>
        <input type="text" class="form-control" name="maridaje">
    </div>
    <div class="col-md-2">
        <label class="form-label">Cepa</label>
        <input type="text" class="form-control" name="cepa">
    </div>
    <div class="col-md-1">
        <label class="form-label">Stock</label>
        <input type="number" class="form-control" name="stock">
    </div>
    <div class="col-md-1">
        <label class="form-label">Precio</label>
        <input type="number" class="form-control"  name="precio">
    </div>
    </div>
    <div class="col-md-8">
        <label class="form-label">Caracteristicas</label>
        <textarea type="text" class="form-control"  name="caracteristica"></textarea>
    </div>
    <div class="col-4">
        <div class="form-check">
            <label class="form-check-label">Recomendado</label>
            <input class="form-check-input" type="checkbox"  name="recomendado">
        </div>
    </div>
        <div class="col-12">
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
</form>