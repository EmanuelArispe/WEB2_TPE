<form class="row g-3" action="newAddCellar" method="POST">
    <h3 class="titulo">{$tituloLista}</h3>
    <div class="col-md-3">
        <label for="formGroupExampleInput2" class="form-label encabezado-table">Nombre</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"name="nombre">
    </div>
    <div class="col-md-3">
        <label for="formGroupExampleInput2" class="form-label encabezado-table">Pais</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"name="pais">
    </div>
    <div class="col-md-3">
        <label for="formGroupExampleInput2" class="form-label encabezado-table">Provincia:</label>
        <input type="text" class="form-control" id="formGroupExampleInput2"name="provincia">
    </div>
    <div class="col-mb-4">
        <label for="formGroupExampleInput2" class="form-label encabezado-table">Descripcion</label>
        <textarea type="text" class="form-control" id="formGroupExampleInput2" name="descripcion"></textarea>
    </div>
    <div class="col-12 centrado">
        <button type="submit" class="btn btn-primary botton-add">Agregar</button>
    </div>
</form>