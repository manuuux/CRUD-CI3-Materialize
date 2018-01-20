<div class="row">
<?= form_open("crud/update/$id"); ?>
<?php
    $nick = array(
        'name' => 'nick',
        'value' => $usuario->result()[0]->nickUsuario
    );
    $email = array(
        'name' => 'email',
        'value' => $usuario->result()[0]->emailUsuario
    );
    $fono = array(
        'name' => 'fono',
        'value' => $usuario->result()[0]->fonoUsuario
    );
?>
<br>
<div class="input-field col s12 m6 offset-m3">
    <h4>Crear Nuevo Usuario</h4>
</div>
<br>
<div class="input-field col s12 m6 offset-m3">
    <?= form_input($nick);?>
    <?= form_label('Nick','nick');?>
</div>
<div class="input-field col s12 m6 offset-m3">
    <?= form_input($email);?>
    <?= form_label('Email','email');?>
</div>
<div class="input-field col s12 m6 offset-m3">
    <?= form_input($fono);?>
    <?= form_label('Telefono','fono');?>
</div>
<button class="btn waves-effect waves-light light-green col s12 m6 offset-m3" type="submit" name="action">Enviar
    <i class="material-icons right">send</i>
</button>
<!-- <?= form_submit('','Enviar');?> -->
<?= form_close(); ?>
</div>