<div class="row">
        <div class="col s8 offset-s2">
            <table class="highlight">
                <h4>Roles ingresados</h4>
                <thead>
                    <tr>
                        <th data-field="id">#</th>
                        <th data-field="nom">Nombre</th>
                        <th data-field="imagen">imagen</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($this->Cmodel->readCategoria() as $row) {
                    ?>
                            <tr>
                                <td><?php echo $row["categ_codigo"]; ?></td>
                                <td><?php echo $row["categ_nombre"]; ?></td>
                                <td><?php echo $row["categ_imagen"]; ?></td>
                                <td>
                                    <a href="?c=categoria&a=update&rcode=<?php echo $row['categ_codigo'];?>">
                                        <i class="material-icons">border_color</i>
                                    </a>
                                    <a href="?c=categoria&a=delete&rcode=<?php echo $row['categ_codigo'];?>">
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
