<div class="row">
            <div class="col s8 offset-s2">
                <table class="highlight">
                    <h2 class="center">Productos ingresados</h2>
                    <thead>
                        <tr>
                            <th data-field="id">#</th>
                            <th data-field="nom">Nombre</th>
                            <th data-field="Descripcion">Descripcion</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($this->PRmodel->readProductos() as $row) {
                        ?>
                                <tr>
                                    <td><?php echo $row["produ_codigo"]; ?></td>
                                    <td><?php echo $row["produ_nombre"]; ?></td>
                                    <td><?php echo $row["produ_descripcion"]; ?></td>
                                    <td>
                                        <a href="?c=productos&a=update&rcode=<?php echo $row['produ_codigo'];?>">
                                            <i class="material-icons">border_color</i>
                                        </a>
                                        <a href="?c=productos&a=delete&rcode=<?php echo $row['produ_codigo'];?>">
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
