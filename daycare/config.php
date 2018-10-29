<?php

# Nesse arquivo de configurações, teremos algumas configurações, mas a mais importante delas e a conexão com o BANCO DE DADOS

require './environment.php';


$config = array();
if (ENVIRONMENT == 'development') {

    # Diferenciação de URL
    define('BASE_URL', 'http://localhost/daycare/');

    $config['dbname'] = 'daycare';
    $config['host'] = 'localhost';
    $config['user'] = 'root';
    $config['pass'] = '';
    $config['options'] = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
} else {

    # Configurações do banco de dados do servidor
    define('BASE_URL', 'http://localhost/daycare/');
    $config['dbname'] = 'daycare';
    $config['host'] = '35.192.17.120';
    $config['user'] = 'daycare';
    $config['pass'] = '123456';
    $config['options'] = array(
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
    );
}

# Variável usada para abrir conexão com banco de dados
global $db;

try {

    $db = new PDO("mysql:dbname=" . $config['dbname'] . ";host=" . $config['host'], $config['user'], $config['pass'], $config['options']);
} catch (PDOException $erro) {
    echo "ERRO: " . $erro->getMessage();
    exit();
}

