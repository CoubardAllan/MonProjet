<?php
namespace App\requete;
use App\requete\abstractrepository;

class categoriesRepository extends abstractrepository{
    public function __construct()
    {
        parent::__construct();
        $this->setTable('categories');
    }
}