<?php $rol = $this->Rmodel->readRolByCode($field) ?>
<div class="row">
    <form class="col s8 offset-s2" action="?c=rol&a=updateData" method="post">
        <h1 class="center">MODIFICAR ROL</h1>
        <div class="row">
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $rol['rol_nombre']; ?>">
                <label for="icon_prefix">Nombre</label>
            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <i class="material-icons prefix">description</i>
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $rol['rol_descripcion']; ?>">
                <label for="icon_prefix">Descripción</label>

            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <i class="material-icons prefix">description</i>
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $rol['rol_fech_creacion']; ?>">
                <label for="icon_prefix">Fecha creacion</label>

            </div>
            <input type="hidden" readonly value="<?php echo $rol['rol_codigo']; ?>" name="data[]">
        </div>
        <div class="row"></div>
        <div class="row center botones">
            <a class="waves-effect waves-light btn" href="?c=rol"><i class="material-icons center">keyboard_backspace</i></a>
            <button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
                <i class="material-icons right">done</i>
            </button>
        </div>
    </form>
</div>
