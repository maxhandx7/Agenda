<?php require_once "config.php" ?>
<div class="card">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-condensed" id="ContactTableDT">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Telefono</th>
                        <th>Email</th>
                        <th>Categoria</th>
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

                            <td><?php echo $r['nombre'] ?></td>
                            <td><?php echo $r['paterno'] ?></td>
                            <td><?php echo $r['telefono'] ?></td>
                            <td><?php echo $r['email'] ?></td>
                            <td><?php echo $r['categoria'] ?></td>

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
        $('#ContactTableDT').DataTable();
    });
</script>



