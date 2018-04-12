<?php
namespace rd\skeleton\core;

use rd\skeleton\filesControl\CssLink;

class View
{
    public function getViewContent($view, $params){
        ob_start();

        //extraction des paramètres du tableau associatif
        extract($params); 

        include BASE_PATH."/src/views/contents/".$view;
        return $content = ob_get_clean();
    }

    public function includeMainView($params){
        ob_start();

        //extraction des paramètres du tableau associatif
        extract($params); 

        include BASE_PATH."/src/views/mainView.php";
        return $content = ob_get_clean();
    }

    public function render($view, array $css = [], array $params = []){
        // récupération du code de la vue
        $viewContent = $this->getViewContent($view, $params);

        // traitement pour chaque fichier css
        $cssLink = CssLink::generateCssLink($css);

        $params["viewContent"]  = $viewContent;
        $params["cssLink"]      = $cssLink;

        return $this->includeMainView($params);
    }

}