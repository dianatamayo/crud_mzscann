<?php $categoria = $this->Cmodel->readCategoriaByCode($field) ?>
<div class="row">
    <form class="col s8 offset-s2" action="?c=categoria&a=updateData" method="post">
        <h1 class="center">MODIFICAR CATEGORIA</h1>
        <div class="row">
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $categoria['categ_nombre']; ?>">
                <label for="icon_prefix">Nombre</label>
            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $categoria['categ_imagen']; ?>">
                <label for="icon_prefix">imagen</label>

            </div>
            <input type="hidden" readonly value="<?php echo $categoria['categ_codigo']; ?>" name="data[]">
        </div>
        <div class="row"></div>
        <div class="row center botones">
            <a class="waves-effect waves-light btn" href="?c=categoria"><i class="material-icons center">keyboard_backspace</i></a>
            <button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
                <i class="material-icons right">done</i>
            </button>
        </div>
    </form>
</div>
