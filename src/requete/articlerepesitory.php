<?php
namespace App\requete;
class articlerepesitory extends abstractrepository{

    public function __construct()
    {
        parent::__construct();
        $this->setTable('articles');
    }
}