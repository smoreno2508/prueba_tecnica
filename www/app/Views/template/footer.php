</div>
<!-- Scripts  -->
<script src="<?= base_url('/public/assets/js/jquery-3.5.1.slim.min.js') ?>"></script>
<script src="<?= base_url('/public/assets/js/popper.min.js') ?>"></script>
<script src="<?= base_url('/public/assets/js/bootstrap.min.js') ?>"></script>
<script src="<?= base_url('/public/assets/js/jquery.dataTables.min.js') ?>"></script>
<script src="<?= base_url('/public/assets/js/sweetalert2@10.js') ?>"></script>

<script>
    $(document).ready(function() {
        // instancia para ocupar sweet alert
        <?php if (session()->getFlashdata('agregar')) : ?>
            Swal.fire({
                icon: 'success',
                title: "<?= session()->getFlashdata('agregar') ?>",
                showConfirmButton: true,
            })
        <?php endif; ?>

        // plugins datatable para la tabla
        $('#tabla').dataTable({
            "bPaginate": false,
            "bLengthChange": false,
            "bFilter": true,
            "bInfo": false,
            "bAutoWidth": false,
            "language": {
                "search": 'Buscar'
            }
        });

    });
</script>
<!-- Fin scripts -->
</body>

</html>