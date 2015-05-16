<?php

namespace Qcm\SalleTpBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salle
 */
class Salle
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $batiment;

    /**
     * @var integer
     */
    private $etage;

    /**
     * @var integer
     */
    private $numero;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set batiment
     *
     * @param string $batiment
     * @return Salle
     */
    public function setBatiment($batiment)
    {
        $this->batiment = $batiment;

        return $this;
    }

    /**
     * Get batiment
     *
     * @return string 
     */
    public function getBatiment()
    {
        return $this->batiment;
    }

    /**
     * Set etage
     *
     * @param integer $etage
     * @return Salle
     */
    public function setEtage($etage)
    {
        $this->etage = $etage;

        return $this;
    }

    /**
     * Get etage
     *
     * @return integer 
     */
    public function getEtage()
    {
        return $this->etage;
    }

    /**
     * Set numero
     *
     * @param integer $numero
     * @return Salle
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;

        return $this;
    }

    /**
     * Get numero
     *
     * @return integer 
     */
    public function getNumero()
    {
        return $this->numero;
    }

    public function __toString(){

        return $this->getBatiment().'-'.$this->getEtage().'-'.$this->getNumero();
    }
}
