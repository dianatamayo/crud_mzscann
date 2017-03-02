<div class="row">
            <div class="col s8 offset-s2">
                <table class="highlight">
                    <h2 class="center">Roles ingresados</h2>
                    <thead>
                        <tr>
                            <th data-field="id">#</th>
                            <th data-field="nom">Nombre</th>
                            <th data-field="des">Descripción</th>
                            <th data-field="fech">Fecha de creacion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($this->Rmodel->readRol() as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row["rol_codigo"]; ?></td>
                                    <td><?php echo $row["rol_nombre"]; ?></td>
                                    <td><?php echo $row["rol_descripcion"]; ?></td>
                                    <td><?php echo $row["rol_fech_creacion"]; ?></td>
                                    <td>
                                        <a href="?c=rol&a=update&rcode=<?php echo $row['rol_codigo'];?>">
                                            <i class="material-icons">border_color</i>
                                        </a>
                                        <a href="?c=rol&a=delete&rcode=<?php echo $row['rol_codigo'];?>">
                                            <i class="material-icons">delete</i>
                                        </a>
                                    </td>
                                </tr>
                            <?php
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
