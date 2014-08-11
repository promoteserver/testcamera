<?php
   $ruta = "img/";
   $nombre_imagen = "unnombre.jpg";
   move_uploaded_file($_FILES["file"]["tmp_name"], $ruta.$nombre_imagen);
?>