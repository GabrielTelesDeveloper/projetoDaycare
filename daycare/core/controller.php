<?php

# Classe ajudadora de todos os controllers, sendo a mesma extendida em todas as outras que pertencem a pasta controllers

class controller {

    //Método responsável por carregar o view
    public function loadView($viewName, $viewData = array()) {
        extract($viewData);
        require 'views/' . $viewName . '.php';
    }

    // Carregar o template
    public function loadTemplate($viewName, $viewData = array()) {
        require 'views/template.php';
    }

    // Carregar o view dentro do template
    public function loadViewInTemplate($viewName, $viewData = array()) {
        extract($viewData);
        require 'views/' . $viewName . '.php';
    }

}

