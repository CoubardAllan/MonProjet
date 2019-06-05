<?php

namespace App\requete;

use App\requete\abstractrepository;

class utilisateurrepository extends abstractrepository
{

    public function __construct()
    {
        parent::__construct();
        $this->setTable('utilisateur');
    }
}