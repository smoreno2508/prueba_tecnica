<?= $header ?>
<div class="card col-sm-9 col-md-9 bg-white p-4">
    <form action="<?= base_url('/nuevo') ?>" method="post" enctype="multipart/form-data">
        <h5>Agregar Usuario</h5>
        <div class="form-group">
            <label for="nombre">Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@ejemplo.cl" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
        </div>
        <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
        <a href="<?= base_url('/') ?>" class="btn btn-info">Cancelar</a>
    </form>
</div>
<?= $footer ?>