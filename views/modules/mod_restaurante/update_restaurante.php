<?php $restaurante = $this->REmodel->readRestauranteByCode($field) ?>
<div class="row">
    <form class="col s8 offset-s2" action="?c=restaurante&a=updateData" method="post">
        <h1 class="center">MODIFICAR RESTAURANTE</h1>
        <div class="row">
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $restaurante['restau_nombre']; ?>">
                <label for="icon_prefix">Nombre</label>
            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $restaurante['restau_telefono']; ?>">
                <label for="icon_prefix">Telefono</label>

            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $restaurante['restau_direccion']; ?>">
                <label for="icon_prefix">Direccion</label>

            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $restaurante['restau_horario']; ?>">
                <label for="icon_prefix">Horarios</label>

            </div>
             <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="number" class="validate" name="data[]" value="<?php echo $restaurante['restau_cant_mesas']; ?>">
                <label for="icon_prefix">Cantida de mesas</label>

            </div>
            <input type="hidden" readonly value="<?php echo $restaurante['restau_codigo']; ?>" name="data[]">
        </div>
        <div class="row"></div>
        <div class="row center botones">
            <a class="waves-effect waves-light btn" href="?c=restaurante"><i class="material-icons center">keyboard_backspace</i></a>
            <button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
                <i class="material-icons right">done</i>
            </button>
        </div>
    </form>
</div>
