<?php
session_start();
class HomeController{

    public function indexAction($hola="hola")
    {
    	return new View("home/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);

        
    }

}
