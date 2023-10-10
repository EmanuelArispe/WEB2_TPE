<form class="row g-3" action="newAddCellar" method="POST">
    <h3>{$tituloLista}</h3>
    <div class="col-md-3">
        <label for="formGroupExampleInput2" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"name="nombre">
    </div>
    <div class="col-md-3">
        <label for="formGroupExampleInput2" class="form-label">Pais</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"name="pais">
    </div>
    <div class="col-md-3">
        <label for="formGroupExampleInput2" class="form-label">Provincia:</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"name="provincia">
    </div>
    <div class="col-mb-4">
        <label for="formGroupExampleInput2" class="form-label">Descripcion</label>
        <textarea type="text" class="form-control" id="formGroupExampleInput2" name="descripcion"></textarea>
    </div>
    <div class="col-12">
        <button type="submit" class="btn btn-primary">Agregar</button>
    </div>
</form>