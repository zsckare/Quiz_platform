<?php

class SubjectController{

    public function indexAction($hola="hola")
    {
      // Controlador principal en esta carpeta crear los demas controladores.
        return new View("subject/index", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
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

        return new View("subject/read", ["title" => "Framework", "layout" => "on", "nameLayout" => "layout"]);
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
