<?php

namespace rd\skeleton\core;

use rd\skeleton\controllers\DefaultController;

class ControlChecker
{
    private $router;
    private $nameSpace;

    public function __construct($router, $nameSpace){
        $this->router       = $router;
        $this->nameSpace    = $nameSpace;
    }

    public function check(){
            $class      =   $this->nameSpace.$this->router->getController();

            // vérification de la classe et de la methode passé dans l'url
            if(class_exists($class) && method_exists($class, $this->router->getAction())){
                //instanciation du controlleur
                $controller = new $class();
    
                call_user_func_array([$controller, $this->router->getAction()], []);
            
            }else{
                // redirection vers la page d'accueil si le controlleur n'existe pas
                $controller = new DefaultController();
                call_user_func_array([$controller, "defaultAction"], []);
            }    
            
    }
    

    /**
     * Get the value of router
     */ 
    public function getRouter()
    {
        return $this->router;
    }

    /**
     * Set the value of router
     *
     * @return  self
     */ 
    public function setRouter($router)
    {
        $this->router = $router;

        return $this;
    }

    /**
     * Get the value of nameSpace
     */ 
    public function getNameSpace()
    {
        return $this->nameSpace;
    }

    /**
     * Set the value of nameSpace
     *
     * @return  self
     */ 
    public function setNameSpace($nameSpace)
    {
        $this->nameSpace = $nameSpace;

        return $this;
    }
}