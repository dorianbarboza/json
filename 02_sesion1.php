<?php
    // Si se usa debe contener (sólo caracteres alfanuméricos) e ir antes de session_start():
     session_id("identificadorDeSesion");
    // Iniciar la sesión
     session_start();
    // Variables de sesión:
     $_SESSION['sesion_iniciada'] = true;
     $_SESSION['nombre'] = "PEDRO";
     $_SESSION['edad'] = 33;
    // Array de sesión:
     $_SESSION['aDatos'] = array();
     $_SESSION['aDatos']['nombre'] = "MARTA";
     $_SESSION['aDatos']['edad'] = 37;
    echo "PÁGINA PRINCIPAL<br />";
    echo "================<p />";
    // Mostrar información de la sesión:
    echo "Identificador de la sesión: [".session_id()."]<br/>";
    echo "Nombre de la sesión: [".session_name()."]<p/>";
    // Mostrar valores de las variables de sesión creadas:
    echo "Nombre: ".$_SESSION['nombre']."<br />";
    echo "Edad: ".$_SESSION['edad']."<p />";
    // Mostrar valores en el array de sesión creado:
    echo "Nombre (en array): ".$_SESSION['aDatos']['nombre']."<br />";
    echo "Edad (en array): ".$_SESSION['aDatos']['edad']."<p />";
    echo "<a href='02_sesion2.php'>Comprobar los valores en otra página</a><br/>";
    echo "<a href='02_sesion3.php'>Finalizar la sesión</a>";
?>
