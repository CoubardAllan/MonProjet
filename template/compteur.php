<?php
function ajouter_vue(){
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR .'compteur';
    $compteur = 1;
    if (file_exists($fichier)) {
        $compteur = (int)file_get_contents($fichier);
        $compteur++;
    }
    file_put_contents($fichier, $compteur);
}
function nombre_vue(): string {
    $fichier = dirname(__DIR__) . DIRECTORY_SEPARATOR . 'compteur';
    return file_get_contents($fichier);
}