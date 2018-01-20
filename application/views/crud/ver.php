<div class="row">
    <div class="col s12 m6 offset-m3">
        <div class="card">
        <div class="card-image">
            <img src="https://source.unsplash.com/collection/190727/600x400">
            <span class="card-title"><?= $usuario->result()[0]->nickUsuario ?></span>
        </div>
        <div class="card-content">
            <p><?= $usuario->result()[0]->emailUsuario ?></p>
            <p><?= $usuario->result()[0]->fonoUsuario ?></p>
        </div>
        <div class="card-action row">
            <div class="col s6">
                <a class="waves-effect waves-light btn light-green darken-2" href="<?=base_url();?>crud/editar/<?= $usuario->result()[0]->idUsuario?>">
                    <i class="material-icons left">edit</i>Editar
                </a>
            </div>
            <div class="col s6">
                <a class="waves-effect waves-light btn red darken-4" href="<?=base_url();?>crud/borrar/<?= $usuario->result()[0]->idUsuario?>">
                    <i class="material-icons right">delete</i>Elimiar
                </a>
            </div>
        </div>
        </div>
    </div>
</div>
            