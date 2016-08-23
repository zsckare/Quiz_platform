<?php
session_start();
class SubjectController{

    public function indexAction($hola="hola")
    {

        if (isset($_SESSION['name'])) {

            if ($_SESSION['type'] == 1) {
                $consulta = new SubjectModel();
                $values = $consulta->getAll();
                return new View("subject/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
            }else{
                Cookies::set("alert","No tienes permisos para entrar en esta seccion","20-s");
                Redirection::go('home');
            }
            
        }else{
            Cookies::set("alert","Necesitas Iniciar Sesion","20-s");
            Redirection::go('home');
        }
    	
    }
    public function createAction($hola="hola")
    {
      	
      	if (isset($_POST['name'])) {
            $consulta = new SubjectModel();
            
            return $consulta->create([
                "name"=> $_POST['name'],
                "code"=> $_POST['code']
                ]);
        }


        return new View("subject/create", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }
    public function readAction($hola="hola")
    {	
    	$materias = new SubjectModel();
        $inscritos = new EnrolledModel();
        $quiz = new QuizModel();
    	$values = $materias->get($_REQUEST['subject']);
    	$name = null;
        $code = null;

		foreach ($values as $row) {
			$name = $row['name'];
            $code = $row['code'];
		}

        $ids = $inscritos->get($code);

        $quizes = $quiz->getBySubject($_REQUEST['subject']);

        return new View("subject/read", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout", "values"=>$name, "ids"=>$ids,"subject_id" =>$_REQUEST['subject'], "quiz"=>$quizes]);
    }
    public function updateAction($hola="hola")
    {

        return new View("subject/update", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }
    public function deleteAction($hola="hola")
    {

        return new View("subject/delete", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
    }

}
