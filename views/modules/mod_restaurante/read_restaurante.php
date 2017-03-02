<div class="row">
         <div class="col s8 offset-s2">
             <table class="highlight">
                 <h2 class="center">Paginas ingresadas</h2>
                 <thead>
                     <tr>
                         <th data-field="id">#</th>
                         <th data-field="nom">Nombre</th>
                         <th data-field="tel">Telefono</th>
                         <th data-field="dir">Direccion </th>
                         <th data-field="hora">Horario</th>
                         <th data-field="cant">Cantidad de mesas</th>
                     </tr>
                 </thead>
                 <tbody>
                     <?php
                         foreach ($this->REmodel->readRestaurante() as $row) {
                     ?>
                             <tr>
                                 <td><?php echo $row["restau_codigo"]; ?></td>
                                 <td><?php echo $row["restau_nombre"]; ?></td>
                                 <td><?php echo $row["restau_telefono"]; ?></td>
                                 <td><?php echo $row["restau_direccion"]; ?></td>
                                 <td><?php echo $row["restau_horario"]; ?></td>
                                 <td><?php echo $row["restau_cant_mesas"]; ?></td>
                                 <td>
                                     <a href="?c=restaurante&a=update&rcode=<?php echo $row['restau_codigo'];?>">
                                         <i class="material-icons">border_color</i>
                                     </a>
                                     <a href="?c=restaurante&a=delete&rcode=<?php echo $row['restau_codigo'];?>">
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
