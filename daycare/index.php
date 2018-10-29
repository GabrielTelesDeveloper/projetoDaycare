<?php

# O único arquivo que pode ser acessado na arquitetura MVC é o index

session_start();
require 'config.php';

# Criar o autoload
spl_autoload_register(function($class) {

    # Sempre que uma classe for instanciada, ela será procurada em quatro locais diferentes (CONTROLLERS, CORE, MODELS)

    if (file_exists('controllers/' . $class . '.php')) {
        require 'controllers/' . $class . '.php';
    }
    
    else if (file_exists('models/' . $class . '.php')) {
        require './models/'.$class.'.php';
    }
    
    else if (file_exists('core/' . $class . '.php')) {
        require 'core/' . $class . '.php';
    }
    
});

$core = new Core();
$core->start();


