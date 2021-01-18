<?php
class Route
{
    private $aRouter;

    public function setRouter($router)
    {
        $this->aRouter = $router;
        return $this;
    }

    public function direct($route)
    {
        if (isset($this->aRouter[$route])) {
            $currentRoute = $this->aRouter[$route];
            $aPasteRoute = explode("@", $currentRoute);
            include "src/Controllers/".$aPasteRoute[0].".php";
            $oControllerIndex = new $aPasteRoute[0];
            $oControllerIndex->{$aPasteRoute[1]}();
        }else {
            echo "404 NOT FOUND";
        }
    }
}
