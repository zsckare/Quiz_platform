<?php

class LoginController{

	public function indexAction()
	{
		return new View("home/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
	}
    public function teacherAction()
    {
      // Controlador principal en esta carpeta crear los demas controladores.
        return new View("home/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }
    public function studentAction()
    {
    	return new View("home/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }

}
