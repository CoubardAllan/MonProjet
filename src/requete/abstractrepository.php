<?php
namespace App\requete;

use App\requete\requete;

abstract class abstractrepository{

    /**
     * @var requete
     */
    private $requete;

    private $table;

    /**
     * abstractrepository constructor.
     */
    public function __construct()
    {
        $this->requete = new requete();
    }

    public function findBy(){
        return $this->requete->select('contenu')->from($this->table)->where(1)->execute();
    }

    /**
     * return all Data
     */
    public function findAll(){
      return $this->requete->select('*')->from($this->table)->execute();
    }

    /**
     * @param mixed $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }
}