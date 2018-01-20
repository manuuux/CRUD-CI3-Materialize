<ul class="collection with-header">
<li class="collection-header"><h4>Contactos</h4></li>
<?php

     if ($usuarios):
     foreach ($usuarios->result() as $usuario):
?>
<li class="collection-item">
    <div>
        <a href="<?=base_url();?>crud/ver/<?= $usuario->idUsuario?>">
            <?= $usuario->nickUsuario ?>
            <i class="material-icons blue-text text-darken-2 tiny">search</i>
        </a>
        
        <a href="<?=base_url();?>crud/borrar/<?= $usuario->idUsuario?>" class="secondary-content">
            <i class="material-icons red-text text-darken-4">delete</i>
        </a>
        <a href="<?=base_url();?>crud/editar/<?= $usuario->idUsuario?>" class="secondary-content">
            <i class="material-icons light-green-text text-darken-2">edit</i>
        </a>
    </div>
</li>

<!-- <div class="col s12 m4">
    <div class="card-panel light-green">
        <span class="white-text"><?= $usuario->nickUsuario ?></span>
    </div>
</div> -->

<!-- <ul>
        <li><a href="<?= $usuario->idUsuario?>"><?= $usuario->nickUsuario ?></a></li>
</ul> -->

    
<?php
    endforeach;
else:
    ?>
<li class="collection-item">
    <div>
        No hay Usuarios
        <a href="#!" class="secondary-content">
            <i class="material-icons light-green-text text-darken-2">add</i>
        </a>
    </div>
</li>
    <?php
endif;
?>

</ul>