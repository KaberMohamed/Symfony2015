<?php

namespace Acme\DemoBundle\Entity\Demo;

use Doctrine\ORM\Mapping as ORM;

/**
 * options_compte
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\Demo\options_compteRepository")
 */
class options_compte
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_parametre", type="integer")
     */
    private $idParametre;

    /**
     * @var boolean
     *
     * @ORM\Column(name="alerte_active", type="boolean")
     */
    private $alerteActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="periode", type="integer")
     */
    private $periode;


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
     * Set idParametre
     *
     * @param integer $idParametre
     * @return options_compte
     */
    public function setIdParametre($idParametre)
    {
        $this->idParametre = $idParametre;

        return $this;
    }

    /**
     * Get idParametre
     *
     * @return integer 
     */
    public function getIdParametre()
    {
        return $this->idParametre;
    }

    /**
     * Set alerteActive
     *
     * @param boolean $alerteActive
     * @return options_compte
     */
    public function setAlerteActive($alerteActive)
    {
        $this->alerteActive = $alerteActive;

        return $this;
    }

    /**
     * Get alerteActive
     *
     * @return boolean 
     */
    public function getAlerteActive()
    {
        return $this->alerteActive;
    }

    /**
     * Set periode
     *
     * @param integer $periode
     * @return options_compte
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return integer 
     */
    public function getPeriode()
    {
        return $this->periode;
    }
}
