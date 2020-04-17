<?php
require 'Repository.php';

class Diplome extends Repository
{
    private $id;
    private $designation;

    /**
     * Diplome constructor.
     * @param $id
     * @param $designation
     */
    public function __construct($id = 0, $designation = '')
    {
        $this->id = $id;
        $this->designation = $designation;
        $this->setTableName();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }


    /**
     * @return mixed
     */
    public function getDesignation()
    {
        return $this->designation;
    }

    /**
     * @param mixed $designation
     */
    public function setDesignation($designation): void
    {
        $this->designation = $designation;
    }


    function setTableName()
    {
        $this->tableName= 'diplome';
    }
}