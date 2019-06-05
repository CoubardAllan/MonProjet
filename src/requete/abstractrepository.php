<?php
namespace App\requete;

use App\requete\requete;

abstract class abstractrepository
{

    /**
     * @var requete
     */
    private $requete;
    private $test;
    private $table;

    /**
     * abstractrepository constructor.
     */
    public function __construct()
    {
        $this->requete = new requete();
        $this->test = connexion::getConnexion();
    }

    public function findBy($params)
    {
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

        return $this->requete->select('contenu')->from($this->table)->where($options)->execute();
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
<<<<<<< HEAD
    public function insertion($data){
        $this->requete = 'INSERT INTO utilisateur(nom, prenom, nom_compte, mot_de_passe, role) VALUES (?,?,?,?,?)';
        $test2 = $this->test->prepare($this->requete);
        $test2->execute([$data['nom'],$data['prenom'],$data['nom_compte'],$data['mot_de_passe'],$data['role']]);
    }
=======
>>>>>>> c5cfdec46f1b0cac88a3bd5bb76c0298e4bf975d
}

