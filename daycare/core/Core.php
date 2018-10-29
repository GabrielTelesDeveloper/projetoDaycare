<?php
# Não é parte da estrutura MVC, é somente um mecanismo usado como ponto de partida, dando início a nossa estrutura

class Core {

    // Identifica a partir da url que está sendo acessada, qual é o controller, e dentro desse controler qual action

    public function start() {

        # 1 = controller - Página principal de algo
        # 2 = action - editar algo ou excluir
        # 3,4,5 = parâmetros - parâmetros passados

        $url = '/';
        if (isset($_GET['url'])) {
            $url .= $_GET['url'];
        }

        $params = array();

        if (!empty($url) && $url != '/') {

            $url = explode('/', $url);
            array_shift($url);

            $currentController = $url[0] . 'Controller';
            array_shift($url);

            if (isset($url[0]) && !empty($url[0])) {
                $currentAction = $url[0];
                array_shift($url);
            } else {
                $currentAction = 'index';
            }

            if (count($url) > 0) {
                $params = $url;
            }
        } else {
            $currentController = 'homeController';
            $currentAction = 'index';
        }

        # Definir o controler
        $controller = new $currentController();

        # Essa função pega a classe e executa a action
        call_user_func_array(array($controller, $currentAction), $params);
    }

}

?>
