<?php
require_once 'ConnexionBD.php';
abstract class Repository
{
    protected $tableName;
    abstract function setTableName();
    public function findAll() {
        $bdd = ConnexionBD::getInstance();
        $req="select * From ".$this->tableName;
        $reponse = $bdd->prepare($req);
        $reponse->execute([]);
        $data = $reponse->fetchAll(PDO::FETCH_OBJ);
        return $data;
    }

    public function deletePersonne($id) {
        $bdd = ConnexionBD::getInstance();
        $req = "delete From ". $this->tableName ." where id = :id";
        $reponse = $bdd->prepare($req);
        $reponse->execute(array(
            'id' => $id
        ));
        return $reponse->fetch();
    }

}