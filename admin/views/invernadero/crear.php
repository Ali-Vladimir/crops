<?php require('views/header.php') ?>
<h1>Nuevo Invernadero</h1>
<form method="post" action="invernadero.php?accion=nuevo">
    <div class="mb-3">
        <label for="invernadero" class="form-label">Nombre del Invernadero</label>
        <input class="form-control" type="text" name="data[invernadero]" placeholder="Escribe aqui el nombre" id="invernadero"/>
    </div>

    <div class="mb-3">
        <label for="latitud" class="form-label">Latitud del Invernadero</label>
        <input class="form-control" type="text" name="data[latitud]" placeholder="Escribe aqui la latitud" id="latitud"/>
    </div>

    <div class="mb-3">
        <label for="longitud" class="form-label">Longitud del Invernadero</label>
        <input class="form-control" type="text" name="data[longitud]" placeholder="Escribe aqui la longitud" id="longitud"/>
    </div>

    <div class="mb-3">
        <label for="area" class="form-label">Area del Invernadero (m<sup>2</sup>)</label>
        <input class="form-control" id="area" type="number" name="data[area]" placeholder="Escribe aqui el area" />
    </div>

    <div class="mb-3">
        <label class="form-label" for="fecha">Fecha</label>
        <input class="form-control" id="fecha" type="date" name="data[fecha_creacion]" placeholder="Escribe aqui la fecha" />
    </div>

    <div class="mb-3">
        <input class="btn btn-success" type="submit" name="data[enviar]" value="Guardar"/>
    </div>
</form>
<?php require('views/footer.php') ?>