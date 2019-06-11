<?php
namespace App\requete;

use App\requete\requete;

abstract class abstractrepository
{

    /**
     * @var requete
     */
    private $requete;
    private $connexion;
    private $table;

    /**
     * abstractrepository constructor.
     */
    public function __construct()
    {
        $this->requete = new requete();
        $this->connexion = connexion::getConnexion();
    }

    public function findBy($params, $opt, $opt2)
    {
        $get = $opt;
        $table = $opt2;
        $options = '';
        $compteur = 0;
        foreach ($params as $key => $valeur) {
            if ($compteur <= 0) {
                $options = $options . ' ' . $key . ' = ' . $valeur;
            } else {
                $options = $options . ' and ' . $key . ' = ' . $valeur;
            }
            $compteur++;
        }

        return $this->requete->select($get)->from($table)->where($options)->execute();
    }

    /**
     * return all Data
     */
    public function findAll()
    {
        return $this->requete->select('*')->from($this->table)->execute();
    }

    public function findUtilisateur()
    {
        return $this->requete->select('*')->from('utilisateur')->execute();
    }

    /**
     * @param mixed $table
     */
    public function setTable($table)
    {
        $this->table = $table;
    }

}

