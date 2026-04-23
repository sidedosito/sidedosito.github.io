<?php

// comentario dentro de php

// al recibir info desde html usando jquery debemos recoger la info

if( isset( $_POST["nombre_usuario"] ) ) {
    // así recogemos la info desde js de index.html
    $nombre = $_POST["nombre_usuario"];
    $apellidos = $_POST["apellidos_usuario"];
    $email = $_POST["email_usuario"];
    $telefono = $_POST["telefono_usuario"];
    $tiempo = $_POST["tiempo_usuario"];
    $alergias = $_POST["alergias_usuario"];
    $fecha = $_POST["fecha_usuario"];

    // después de recoger la info a registar en la base de datos iniciamos su registro

    // usar red bean php para registrar todo en tabla usuario
    include "rb-mysql.php";
    R::setup( 'mysql:host=sql305.infinityfree.com;dbname=if0_37591393_evento',
    'if0_37591393', 'Beater89' );
    $usuario = R::dispense( 'usuarios' );
    $usuario->nombre = $nombre;
    $usuario->apellidos = $apellidos;
    $usuario->email = $email;
    $usuario->telefono = $telefono;
    $usuario->tiempo = $tiempo;
    $usuario->alergias = $alergias;
    $usuario->fecha = $fecha;
    R::store( $usuario );
    echo "datos registrados correctamente";
} // end isset