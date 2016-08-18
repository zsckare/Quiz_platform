<?php

class LoginController{

	public function indexAction()
	{

        $user=trim($_POST['user']);
        $pass=trim($_POST['password']);
        $user = new UserModel();
        $consulta = $user->getAll();
        


        return new View("login/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout", "values"=>$consulta,"email"=>$user,"password"=>$pass]);
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
