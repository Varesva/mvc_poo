<?php

abstract class Modele 
{

    protected $connect;
    protected $table;

    public function __construct()
    {
        include __DIR__."/../../src/Dbconn.php";
        $this->connect=Dbconn::getPdo();
    }
    public function allArticles()
    {

        $sql = "SELECT * from $this->table";
        $resultat = $this->connect->query($sql);

        $tab = $resultat->fetchAll();
        var_dump($tab);
    }

    public function findOne($id)
    {

        $sql = "SELECT * FROM $this->table WHERE id=$id";
        $resultat = $this->connect->query($sql);

        $tab = $resultat->fetchAll();
        var_dump($tab);
    }

    public function deleteOne($id)
    {

        $sql = "DELETE FROM $this->table WHERE id=$id";
        $resultat = $this->connect->query($sql);

        $tab = $resultat->fetchAll();
        var_dump($tab);
    }

}