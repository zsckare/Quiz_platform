<?php
session_start();
class SessionController{

	public function loginAction()
	{

        $email = trim($_REQUEST['email']);
        $pass = Security::getEncrypt(trim($_REQUEST['password']));
        $user = new UserModel();
        $consulta = $user->get($email,$pass);
   
        return new View("login/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout", "values"=>$consulta,"email"=>$email,"password"=>$pass]);
    }
    public function logoutAction()
    {
        if (isset($_SESSION['name'])) {
            session_destroy();
            Redirection::go('home');
        }
        
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
