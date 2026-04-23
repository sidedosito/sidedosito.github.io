<?php

include "rb-mysql.php";
    R::setup( 'mysql:host=sql305.infinityfree.com;dbname=if0_37591393_evento',
    'if0_37591393', 'Beater89' );

// Ya preparada la conexión, pedir usuarios de la tabla usuarios
$usuarios = R::getAll( 'SELECT * FROM usuarios' );

echo json_encode($usuarios);