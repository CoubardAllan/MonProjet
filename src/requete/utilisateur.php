<?php
class utilisateur{
    private $nom;
    private $prenom;
    private $nom_compte;
    private $mot_de_passe;
    private $role;

    /**
     * @param mixed $prenom
     */
    public function setPrenom($prenom): void
    {
        $this->prenom = $prenom;
    }

    /**
     * @param mixed $nom
     */
    public function setNom($nom): void
    {
        $this->nom = $nom;
    }

    /**
     * @return mixed
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @return mixed
     */
    public function getMotDePasse()
    {
        return $this->mot_de_passe;
    }

    /**
     * @return mixed
     */
    public function getNomCompte()
    {
        return $this->nom_compte;
    }

    /**
     * @return mixed
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * @param mixed $mot_de_passe
     */
    public function setMotDePasse($mot_de_passe): void
    {
        $this->mot_de_passe = $mot_de_passe;
    }

    /**
     * @param mixed $nom_compte
     */
    public function setNomCompte($nom_compte): void
    {
        $this->nom_compte = $nom_compte;
    }

    /**
     * @param mixed $role
     */
    public function setRole($role): void
    {
        $this->role = $role;
    }

}
