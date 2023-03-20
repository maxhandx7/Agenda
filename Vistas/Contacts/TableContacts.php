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
                            <td><p class="link-dark"><?php echo $r['nombre'] ?></p></td>
                            <td><p class="link-dark"><?php echo $r['paterno'] ?></p></td>
                            <td><a href="https://api.whatsapp.com/send?phone=<?php echo $r['telefono'] ?>" class="link-success text-decoration-none" Target="_blank"></i><?php echo $r['telefono'] ?></a></td>
                            <td><a href="mailto:<?php echo $r['email'] ?>" class="link-info text-decoration-none" Target="_blank"><?php echo $r['email'] ?></i></a></td>
                            <td><p class="link-dark"><?php echo $r['categoria'] ?></p></td>

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