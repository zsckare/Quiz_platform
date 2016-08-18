<?php

class SubjectController{

    public function indexAction($hola="hola")
    {
    	$consulta = new SubjectModel();
    	$values = $consulta->getAll();
        return new View("subject/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout","values"=>$values]);
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

    	$values = $materias->get($_REQUEST['subject']);
    	$name = null;
        $code = null;

		foreach ($values as $row) {
			$name = $row['name'];
            $code = $row['code'];

		}

        $ids = $inscritos->get($code);



        return new View("subject/read", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout", "values"=>$name, "ids"=>$ids]);
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
