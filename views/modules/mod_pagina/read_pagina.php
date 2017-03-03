<div class="row">
         <div class="col s8 offset-s2">
             <table class="highlight">
                 <h4>Paginas ingresadas</h4>
                 <thead>
                     <tr>
                         <th data-field="id">#</th>
                         <th data-field="nom">Nombre</th>
                         <th data-field="menu">menu</th>
                         <th data-field="icono">icono</th>
                         <th data-field="seccion">seccion</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                         foreach ($this->Pmodel->readPagina() as $row) {
                     ?>
                             <tr>
                                 <td><?php echo $row["pag_codigo"]; ?></td>
                                 <td><?php echo $row["pag_nombre"]; ?></td>
                                 <td><?php echo $row["pag_menu"]; ?></td>
                                 <td><?php echo $row["pag_icono"]; ?></td>
                                 <td><?php echo $row["pag_seccion"]; ?></td>
                                 <td>
                                     <a href="?c=pagina&a=update&rcode=<?php echo $row['pag_codigo'];?>">
                                         <i class="material-icons">border_color</i>
                                     </a>
                                     <a href="?c=pagina&a=delete&rcode=<?php echo $row['pag_codigo'];?>">
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
