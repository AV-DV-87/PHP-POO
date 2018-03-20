<?php
class Etudiant{

    private $prenom;
    private $cache;
    public function __construct($prenom) //méthode magique
    {
        //la fonction __construct se lance à l'instanciation
        $this->setPrenom($prenom);
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;
    }

}

//-----------------------------------------

$etudiant = new Etudiant('Arnaud');
//la fonction récupère les arguments fournis au moment de l'instanciation

echo 'prenom : '. $etudiant->getPrenom();

$etudiant2 = new Etudiant();

/*COMMENT---------



*/