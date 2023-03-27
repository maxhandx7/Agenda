<?php require_once "config.php" ?>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-condensed" id="ContactTableDT">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <?php
                        foreach ($result as $r) {
                            $idContact = $r['idContact'];
                        ?>
                            <td><a href="" class="link-primary pe-auto text-decoration-none" onclick="infoContact('<?php echo $idContact ?>')" data-bs-toggle="modal" data-bs-target="#modalinfocontacts"><i class="fa-solid fa-user fa-beat-fade"></i> &nbsp;<?php echo $r['nombre'] ?></a></td>
                            <td><a class="btn btn-outline-info btn-sm" onclick="editContact('<?php echo $idContact ?>')" data-bs-toggle="modal" data-bs-target="#modalupdatecontacts"><i class="fa fa-pen"></i></a></td>
                            <td><a class="btn btn-outline-danger btn-sm" onclick="dropContacts('<?php echo $idContact  ?>')"><i class="fa fa-trash"></i> </a></td>
                    </tr>
                <?php
                        }
                ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script type="text/javascript">
    $(document).ready(function() {
        $('#ContactTableDT').DataTable({
            language: {
                "decimal": "",
                "emptyTable": "No hay información",
                "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
                "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
                "infoFiltered": "(Filtrado de _MAX_ total entradas)",
                "infoPostFix": "",
                "thousands": ",",
                "lengthMenu": "Mostrar _MENU_ Entradas",
                "loadingRecords": "Cargando...",
                "processing": "Procesando...",
                "search": "Buscar:",
                "zeroRecords": "Sin resultados encontrados",
                "paginate": {
                    "first": "Primero",
                    "last": "Ultimo",
                    "next": "Siguiente",
                    "previous": "Anterior"
                }
            },
        });
    });
</script>