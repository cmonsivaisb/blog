<?php
$active_group = 'default';
$query_builder = TRUE;
$db['default'] = array(
    'dsn'   => '',
    'hostname' => 'localhost', // Cambia esto a la dirección de tu servidor MySQL si es diferente
    'username' => 'root',
    'password' => '',
    'database' => 'blog',
    'dbdriver' => 'mysqli',
    'dbprefix' => '',
    'pconnect' => FALSE,
    'db_debug' => (ENVIRONMENT !== 'production'),
    'cache_on' => FALSE,
    'cachedir' => '',
    'char_set' => 'utf8',
    'dbcollat' => 'utf8_general_ci',
    'swap_pre' => '',
    'encrypt' => FALSE,
    'compress' => FALSE,
    'stricton' => FALSE,
    'failover' => array(),
    'save_queries' => TRUE
);
