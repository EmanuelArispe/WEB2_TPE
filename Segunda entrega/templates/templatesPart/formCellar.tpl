<form class="row g-3" action="addModifyCellar/{$cellar->id_bodega}" method="POST">
    <h3>Se esta modificado la Boodega: {$cellar->nombre} </h3>
    <div class="col-md-3">
    <label for="formGroupExampleInput2" class="form-label">Nombre</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" value="{$cellar->nombre}" name="nombre">
</div>
    <div class="col-md-3">
        <label for="formGroupExampleInput2" class="form-label">Pais</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="{$cellar->pais}" name="pais">
    </div>
    <div class="col-md-3">
        <label for="formGroupExampleInput2" class="form-label">Provincia:</label>
        <input type="text" class="form-control" id="formGroupExampleInput2" value="{$cellar->provincia}" name="provincia">
    </div>
    <div class="col-mb-4">
        <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
        <textarea type="text" class="form-control" id="formGroupExampleInput2" name="descripcion">{$cellar->descripcion}</textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Modificar</button>
    </div>
</form>