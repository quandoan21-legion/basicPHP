<?php
class Router
{
    private $aRouter ;

    public function setRouter($router) {
        $this->aRouter = $router;
        return $this;
    }
    public function direct($route) 
    {
        if (isset($this->aRouter[$route])) {
            $currentRoute  = $this->aRouter[$route];

            $aPasteCurrentRoute = explode("@", $currentRoute);
            
            include "src/Controllers/" . $aPasteCurrentRoute[0] .'.php';
            $oCurrentRoute = new $aPasteCurrentRoute[0];
            $oCurrentRoute -> {$aPasteCurrentRoute[1]}();
        }else {
            echo "404 not found that route";
        }
    }
}
