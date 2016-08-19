<?php

  class QuizModel{

    protected $consult;
    public $rows;

    public function __construct()
    {
        $this->consult = new Querys();
    }


    public function get($value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM quiz
            WHERE id = '$value'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }

    public function getBySubject($value = null)
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM quiz
            WHERE id_subject = '$value'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }



    public function getAll()
    {
        $query = $this->consult->getConsultar("
            SELECT *
            FROM quiz
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }
    public function create($values = array())
    {
      extract($values);
      $pass = Security::getEncrypt($password);
      if($this->consult->getConsultar("
              INSERT INTO quiz
              (id_subject, name, start_date, id_user)
              VALUES
              ('$id_subject', '$name', '$start_date','$id_user')
          "))
      {
         Cookies::set("complete","Se ha creado el usuario correctamente","20-s");
         Redirection::go("last/?option=1");
      }else{
         Cookies::set("alert","Error: por algun motivo no se pudo crear el usuario intenta de nuevo","20-s");
         Redirection::go("user");
      }
    }

    public function update($useractual,$mailactual, $comp, $user, $correo, $values=array())
    {
      if($this->consult->getConsultar("
          UPDATE users
          SET name = '$name'
          WHERE name_user = '$user'
      "))
      {
        $_SESSION['user']=$name;
        Cookies::set("complete","Se ha editado el usuario correctamente","20-s");
        Redirection::go("user");
      }else{
        Cookies::set("alert","Error: por algun motivo no se pudo editar el usuario intenta de nuevo","20-s");
        Redirection::go("user");
      }   
    }

    public function destroy($id)
    {
        if($this->consult->getConsultar("
            DELETE FROM users
            WHERE id_user = '$id'
        ")){
           Cookies::set("delete","Se ha eliminado el usuario correctamente","20-s");
           Redirection::go("user");
        }else
        {
           Cookies::set("alert","Error: No se ha podido eliminar el usuario intenta de nuevo","20-s");
          Redirection::go("user");
        }
    }
  }