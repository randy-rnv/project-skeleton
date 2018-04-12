<?php
namespace rd\skeleton\core;

class Router
{
    private $url;
    private $controller = "DefaultController";
    private $action     = "defaultAction";

    public function __construct($url = "default/default"){
        $this->url = $url;
        $this->checkUrl();
    }

    /**
     * fonction pour traiter l'url
     */
    private function checkUrl(){
        $urlContents = explode("/", $this->url);

        // controlleur demandé
        if(count($urlContents)>0 && !empty($urlContents[0])){
            $this->controller   = ucfirst(array_shift($urlContents))."Controller";
        }

        // action du controlleur 
        if(count($urlContents)>0 && !empty($urlContents[0])){
            $this->action       = strtolower(array_shift($urlContents))."Action";
        }
    }// function checkUrl

    /**
     * Get the value of url
     */ 
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set the value of url
     *
     * @return  self
     */ 
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get the value of controller
     */ 
    public function getController()
    {
        return $this->controller;
    }

    /**
     * Set the value of controller
     *
     * @return  self
     */ 
    public function setController($controller)
    {
        $this->controller = $controller;

        return $this;
    }
    

    /**
     * Get the value of action
     */ 
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Set the value of action
     *
     * @return  self
     */ 
    public function setAction($action)
    {
        $this->action = $action;

        return $this;
    }
}