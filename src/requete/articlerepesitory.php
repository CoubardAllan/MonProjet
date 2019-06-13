<?php
namespace App\requete;
use App\requete\abstractrepository;
class articlerepesitory extends abstractrepository{
    private $connexion;
    private $requete;
    public function __construct()
    {
        parent::__construct();
        $this->setTable('articles');
        $this->connexion = connexion::getConnexion();
        $this->requete = new requete();
    }

    public function ajoutArticle($data){
        $query = 'INSERT INTO articles(titre , contenu , date_publication , category_id ) VALUES (?,?,?,?)';
        $ajout = $this->connexion->prepare($query);
        $ajout->execute([$data['titre'], $data['contenu'], $data['date_publication'], $data['categorie']]);
        $id = $this->connexion->lastInsertId();
        $query = 'SELECT * FROM articles WHERE id = ' . $id ;
        $recuperation = $this->connexion->prepare($query);
        $recuperation->execute();
        $article = $recuperation->fetch(\PDO::FETCH_OBJ);
        $tmp_name = $_FILES['fichier']['tmp_name'];
        if(move_uploaded_file($tmp_name, '../../image/'. $article->id .'-article-image.jpg')){
            // Mettre a jour l'url de la photo de l'article
            // url = $article->id . '-article-image.jpg'
            $query = 'UPDATE articles SET photo_url = "' . $article->id . '-article-image-jpg" WHERE id = '.$article->id;
            $imageurl = $this->connexion->prepare($query)->execute();
        }
    }
}