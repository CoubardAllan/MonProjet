<?php
namespace App\requete;
use App\requete\abstractrepository;
class articlerepesitory extends abstractrepository{
    public function __construct()
    {
        parent::__construct();
        $this->setTable('articles');
    }
}