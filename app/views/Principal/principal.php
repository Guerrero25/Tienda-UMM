<?php
Sesion::start();
$userName  = Sesion::getSesion('Usuario');
?>
<h1>Bienvenido <?= $userName  ?></h1>
