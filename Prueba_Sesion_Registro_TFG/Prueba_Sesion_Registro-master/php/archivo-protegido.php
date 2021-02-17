<?php include("sesion.php") ?>
<h3>Bienvenido a la mejor app de gestion de ejercicios y dietas</h3>
<img src="../img/wellcome.jpg" />
<br/>
<br/>
<h3>Has iniciado una sesion segura <span style="color: red;"><?php echo $_SESSION["usuario"]; ?></span> , en nuestra app </h3>
<br/>
<br/>
<a href="salir.php">Salir</a>