<?php
defined('ABSPATH') or die("Bye bye");
if (!current_user_can('manage_options')) wp_die(__('No tienes los suficientes permisos para acceder a esta pagina'));
?>

<div class="wrap">
    <h2>
        <?php _e('PCT', 'PORTAL CAMARA COMERCIO') ?>
    </h2>
    Bienvenido a la configuraciond de ejemplo
</div>
<?php
?>