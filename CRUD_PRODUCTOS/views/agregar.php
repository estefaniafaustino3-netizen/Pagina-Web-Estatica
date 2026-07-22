<h2 class="mb-4">Agregar información del animal</h2>

<form action="actions/producto.php" method="POST" enctype="multipart/form-data">

    <div class="mb-3">

        <label class="form-label">
           Nombre del animal
        </label>

        <input
            type="text"
            name="descripcion_producto"
            class="form-control"
            required>

    </div>

    <div class="mb-3">

        <label class="form-label">
            Descripción
        </label>

        <input
            type="text"
            
            name="precio_unitario"
            class="form-control"
            required>

    </div>

    <div class="mb-3">

        <label class="form-label">
            Imagen
        </label>

        <input
            type="file"
            name="imagen_producto"
            class="form-control"
            accept="image/*"
            required>

    </div>

    <button
        type="submit"
        name="guardar"
        class="btn btn-success">

        Guardar información del animal 

    </button>

</form>