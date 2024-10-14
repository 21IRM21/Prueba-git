<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Curriculum Vitae</title>
</head>
<body>

    <?php
    $nombre = "Lucas";
    $apellidos = "Roldán Villoslada";
    $fecha_nacimiento = "13/09/1979"; 
    $centro = "Univ. Granada";
    $ano = "2009";
    $titulacion = "Ingeniería de Sistemas";
    $empresa_nombre = "IBM";    
    $fecha_inicio = "2002-01-01";
    $fecha_fin = "Hasta la actualidad";
    ?>
 
    <h1>Curriculum Vitae</h1>

    <p><?php echo $nombre . ' ' . $apellidos; ?></p>
    <img src="foto.png" alt="Foto de Perfil">
    
    <form method="get" action="#" target="_self" name="curriculum_vitae">

        <fieldset>
            <legend><h2><u>Datos Personales</u></h2></legend>
            <label>Nombre: </label>
            <input type="text" name="nombre" value="<?php echo $nombre; ?>"><br>
            <label>Apellidos:</label>
            <input type="text" name="apellidos" value="<?php echo $apellidos; ?>"><br>
            <label>Fecha de Nacimiento:</label>
            <input type="string" name="fecha_nacimiento" value="<?php echo $fecha_nacimiento; ?>"><br>
        </fieldset>

        <fieldset>
            <legend><h2><u>Titulación</u></h2></legend>
            <label>Centro: </label>
            <input type="text" name="centro" value="<?php echo $centro; ?>"><br>
            <label>Año:</label>
            <input type="text" name="ano" value="<?php echo $ano; ?>"><br>
            <label>Titulación:</label>
            <input type="text" name="titulacion" value="<?php echo $titulacion; ?>"><br>
        </fieldset>

        <fieldset>
            <legend><h2><u>Experiencia Laboral</u></h2></legend>
            <label>Nombre Empresa: </label>
            <input type="text" name="empresa_nombre" value="<?php echo $empresa_nombre; ?>"><br>
            <label>Fecha de Inicio:</label>
            <input type="string" name="fecha_inicio" value="<?php echo $fecha_inicio; ?>"><br>
            <label>Fecha de Fin:</label>
            <input type="string" name="fecha_fin" value="<?php echo $fecha_fin; ?>"><br>
        </fieldset>

        <input type="submit" value="Enviar">
    </form>

</body>
</html>
