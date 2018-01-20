<div class="row">
<?= form_open("crud/insert"); ?>
<?php
    $nick = array(
        'name' => 'nick'
    );
    $email = array(
        'name' => 'email'
    );
    $fono = array(
        'name' => 'fono'
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