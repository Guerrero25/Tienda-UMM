<a href="<?php echo URL; ?>public/User/cerrarSesion">Cerrar Sesión</a>
<?php
Sesion::start();
$userName  = Sesion::getSesion('Usuario');
?>
<h1>Bienvenido <?= $userName  ?></h1>
