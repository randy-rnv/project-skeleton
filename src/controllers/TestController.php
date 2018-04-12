<?php

namespace rd\skeleton\controllers;

use rd\skeleton\core\View;

class TestController
{
    private $cssFile = [];

    public function afficherAction(){
        echo "done";
    }

    public function formAction(){
        $view = new View();
        echo $view->render("form.php");
    }

    public static function getTestAction(){
        $variable = filter_input(INPUT_GET, "pseudo");
        echo $variable;
    }

}
