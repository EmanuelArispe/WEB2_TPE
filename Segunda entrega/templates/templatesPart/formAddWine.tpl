<h3 class="titulo">{$tituloLista}</h3>
<form class="row g-3" action="newAddWine" method="POST">
    <div class="col-md-2">
        <label class="form-label encabezado-table">Nombre</label>
        <input type="text" class="form-control" name="nombre">
    </div>
    <div class="col-md-2">
        <label class="form-label encabezado-table">Bodegas</label>
        <select class="form-select" name="bodega">
            {foreach from=$listCellar item=$cellar}
                <option value="{$cellar->id_bodega}">{$cellar->nombre}</option>
            {/foreach}
        </select>
    </div>
    <div class="col-md-1">
        <label class="form-label encabezado-table">Año</label>
        <input type="number" class="form-control" name="anio">
    </div>
    <div class="col-md-2">
        <label class="form-label encabezado-table">Maridaje</label>
        <input type="text" class="form-control" name="maridaje">
    </div>
    <div class="col-md-2">
        <label class="form-label encabezado-table">Cepa</label>
        <input type="text" class="form-control" name="cepa">
    </div>
    <div class="col-md-1">
        <label class="form-label encabezado-table">Stock</label>
        <input type="number" class="form-control" name="stock">
    </div>
    <div class="col-md-1">
        <label class="form-label encabezado-table">Precio</label>
        <input type="number" class="form-control" name="precio">
    </div>
    </div>
    <div class="col-md-8">
        <label class="form-label encabezado-table">Caracteristicas</label>
        <textarea type="text" class="form-control" name="caracteristica"></textarea>
    </div>
    <div class="col-4">
        <div class="form-check">
            <label class="form-check-label encabezado-table">Recomendado</label>
            <input class="form-check-input" type="checkbox" name="recomendado">
        </div>
    </div>
    <div class="col-12 centrado">
        <button type="submit" class="btn btn-primary botton-add">Agregar</button>
    </div>
</form>