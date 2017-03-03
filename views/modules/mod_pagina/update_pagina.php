<?php $pagina = $this->Pmodel->readPaginaByCode($field) ?>
<div class="row">
    <form class="col s8 offset-s2" action="?c=pagina&a=updateData" method="post">
        <h1 class="center">MODIFICAR PAGINA</h1>
        <div class="row">
            <div class="input-field col s6 offset-s3">
                <i class="material-icons prefix">label</i>
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $pagina['pag_nombre']; ?>">
                <label for="icon_prefix">Nombre</label>
            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $pagina['pag_menu']; ?>">
                <label for="icon_prefix">menu</label>

            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $pagina['pag_icono']; ?>">
                <label for="icon_prefix">ICONO</label>

            </div>
            <div class="row"></div>
            <div class="input-field col s6 offset-s3">
                <input id="icon_prefix" type="text" class="validate" name="data[]" value="<?php echo $pagina['pag_seccion']; ?>">
                <label for="icon_prefix">seccion</label>

            </div>
            <input type="hidden" readonly value="<?php echo $pagina['pag_codigo']; ?>" name="data[]">
        </div>
        <div class="row"></div>
        <div class="row center botones">
            <a class="waves-effect waves-light btn" href="?c=pagina"><i class="material-icons center">keyboard_backspace</i></a>
            <button class="btn waves-effect waves-light" type="submit" name="action">Actualizar
                <i class="material-icons right">done</i>
            </button>
        </div>
    </form>
</div>
