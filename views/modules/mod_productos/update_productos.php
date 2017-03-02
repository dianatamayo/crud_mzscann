<?php $productos = $this->PRmodel->readProductosByCode($field) ?>
<div class="row">
    <form class="col s8 offset-s2" action="?c=productos&a=updateData" method="post">
        <h1 class="center">MODIFICAR PRODUCTOS</h1>
        <div class="row">
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $productos['produ_nombre']; ?>">
                <label for="icon_prefix">Nombre</label>
            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $productos['produ_descripcion']; ?>">
                <label for="icon_prefix">Descripcion</label>

            </div>
            <input type="hidden" readonly value="<?php echo $productos['produ_codigo']; ?>" name="data[]">
        </div>
        <div class="row"></div>
        <div class="row center botones">
            <a class="waves-effect waves-light btn" href="?c=productos"><i class="material-icons center">keyboard_backspace</i></a>
            <button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
                <i class="material-icons right">done</i>
            </button>
        </div>
    </form>
</div>
