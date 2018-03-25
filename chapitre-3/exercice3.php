<?php

//------------------------

/**
 * Class Vehicule
 */
class Vehicule
{
    private $litre;
    private $reservoir;
    //
    public function __construct($litre, $reservoir){

        $this->setLitre($litre);
        $this->setReservoir($reservoir);
        echo 'Ce véhicule à un réservoir de '.$this->getReservoir().' litres et il contient '.$this->getLitre().' litres <br>';
    }

    public function getLitre()
    {
        return $this->litre;
    }

    public function setLitre($litre)
    {
        $this->litre = $litre;
    }

    public function getReservoir()
    {
        return $this->reservoir;
    }

    public function setReservoir($reservoir)
    {
        $this->reservoir = $reservoir;
    }




}

//------------------------

/**
 * Class Pompe
 */
class Pompe
{
    private $litre;


    public function getLitre()
    {
        return $this->litre;
    }

    public function setLitre($litre)
    {
        $this->litre = $litre;
        echo 'Cette pompe contient '.$this->getLitre().' litres<br>';
    }

    /**
     * @param Vehicule $vehicule
     */
    public function donneEssence(Vehicule $vehicule){ //BONNE PRATIQUE mettre le type de l'argument int array ou class...
        $vehiculeBefore = $vehicule->getLitre();
        $reservoir = $vehicule->getReservoir();
        $besoin = $reservoir - $vehiculeBefore ;
        //stocker les données à manipuler dans des variables

        if($vehiculeBefore < $reservoir)
        {
           $vehicule->setLitre($vehiculeBefore + $besoin);
           $this->setLitre($this->getLitre() - $besoin);
            echo 'Jai fait le plein et mon reservoir contient '.$vehicule->getLitre().' litres et il reste '.$this->getLitre().'litres dans mon réservoir.<br>';
        }
        else
        {
            echo 'RESERVOIR PLEIN!!!<br>';
        }
    }

}
//------------------------

//1-2-3 Création véhicule

$monVehicule = new Vehicule(5,80);


//5-6-7 Création d'une pompe
$maPompe = new Pompe();
$maPompe->setLitre('800');


//8
$maPompe->donneEssence($monVehicule);


$maPompe->donneEssence($monVehicule);









