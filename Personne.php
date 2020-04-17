<?php
require 'Repository.php';

class Personne extends Repository
{
    private $id;
    private $name;
    private $age;
    private $job;
    private $firstname;
    private $image;

    /**
     * Personne constructor.
     * @param $id
     * @param $name
     * @param $age
     * @param $job
     * @param $firstname
     * @param $image
     */
    public function __construct($id=0, $name='', $age=0, $job='', $firstname='', $image=null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->age = $age;
        $this->job = $job;
        $this->firstname = $firstname;
        $this->image = $image;
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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getJob()
    {
        return $this->job;
    }

    /**
     * @param mixed $job
     */
    public function setJob($job): void
    {
        $this->job = $job;
    }

    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname): void
    {
        $this->firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param mixed $image
     */
    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function login($username, $password) {
        $bdd = ConnexionBD::getInstance();
        //$req = "select * From personne where name = '${_POST['username']}' and firstname = '${_POST['password']}' ; ";
        $req = "select * From personne where name = :username and firstname = :password ";
        //$reponse = $bdd->query($req);
        $reponse = $bdd->prepare($req);
        $reponse->execute(array(
            'password' => $_POST['password'],
            'username' => $_POST['username']
        ));
        $user = $reponse->fetch(PDO::FETCH_OBJ);
        return ($user);
    }

    function setTableName()
    {
        $this->tableName = 'personne';
    }
}