<?php
namespace rd\skeleton\controllers;

use rd\skeleton\core\View;

class DefaultController
{
    // fichier .css
    private $cssFile = ["default.css", "default_2.css"];

    public function defaultAction(){
        $view = new View();
        
        //page avec les fichiers .css spécifiques
        echo $view->render("index.php", $this->cssFile);
    }
    
    public static function getTestAction(){
        $variable = filter_input(INPUT_GET, "pseudo");
        echo $variable;
    }
}