<?php

  class EnrolledModel{

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
            FROM enrolled
            WHERE code_subject = '$value'
        ");

        while($row = $query->fetch_array(MYSQLI_ASSOC)){
            $this->rows[] = $row;
        }

        return $this->rows;

    }


  }