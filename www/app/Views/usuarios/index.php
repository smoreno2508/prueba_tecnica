<?= $header ?>

<!-- Modal para agregar Usuario -->
<!-- Modal -->
<form action="<?=base_url('/agregar')?>" method="post" enctype="multipart/form-data">
    <div class="modal fade" id="agregarModal" tabindex="-1" aria-labelledby="agregarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-dark">
                    <h5 class="modal-title text-white" id="agregarModalLabel">Agregar Usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingrese nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="ejemplo@ejemplo.cl"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>
<!-- Fin Modal agregar Usuario -->


<!-- Encerramos todo dentro de div card para mas orden -->
<div class="card">
    <!-- Inicio titulo tabla -->
    <div class="card-header table-title">
        <h4 class="text-white">Administrador <b>Usuarios</b>
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#agregarModal"><i class="material-icons">&#xE147;</i> <span>Agregar Usuario</span></a>
        </h4>
    </div>
    <!-- fin inicio tabla -->

    <!-- Inicio cuerpo del card y tabla -->
    <div class="card-body">
        <table class="table table-striped table-responsive-xs" id="tabla">
            <thead>
                <tr>
                    <th class="th-sm" scope="col">#</th>
                    <th class="th-sm" scope="col">Nombre</th>
                    <th class="th-sm" scope="col">Email</th>
                    <th class="th-sm" scope="col">Fecha registro</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($usuarios) : ?>
                    <?php foreach ($usuarios as $usuario) : ?>
                        <tr>
                            <th scope="row"><?= $usuario['id'] ?></th>
                            <td><?= $usuario['nombre'] ?></td>
                            <td><?= $usuario['email'] ?></td>
                            <td><?= date('d-m-Y', strtotime($usuario['fecha_registro'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="4" class="text-center">sin datos</td>
                        </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <!-- Fin cuerpo del card y tabla -->

    <!-- Inicio footer card y paginación -->

    <div class="card-footer text-muted table-footer">
        <?php if ($pager) : ?>
            <?php $pagi_path = '/'; ?>
            <?php $pager->setPath($pagi_path); ?>
            <?= $pager->links() ?>
        <?php endif ?>
    </div>

    <!-- Fin footer card  y paginación-->

</div>
<!-- Fin div card -->
<?= $footer ?>