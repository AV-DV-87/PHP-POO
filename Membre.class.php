<?php

class Membre
{
    private $pseudo;
    private $email;


    //GET SET de pseudo
    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($arg)
    {
        $this->pseudo = $arg;
    }

    //GET SET de email
    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($arg)
    {
        $this->email = $arg;
    }



    //exercice : Au regard de cette classe veuillez créer un membre,
    // lui affecter un pseudo et un email, afficher ses infos

}

//-----------------------------
$membre1 = new Membre();

$membre1 ->setPseudo('BIBI');
echo'Pseudo : ' . $membre1 ->getPseudo().'<br>';

$membre1->setEmail('arnaud.vallette@gmail.com');
echo 'Email : ' . $membre1->getEmail().'<br>';