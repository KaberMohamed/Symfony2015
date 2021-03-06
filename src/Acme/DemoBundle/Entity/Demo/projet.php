<?php

namespace Acme\DemoBundle\Entity\Demo;

use Doctrine\ORM\Mapping as ORM;

/**
 * projet
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\Demo\projetRepository")
 */
class projet
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
     * @ORM\ManyToOne(targetEntity="etudiant", inversedBy="projet")
     * @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id")
     */
    private $etudiant;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_projet", type="integer")
     */
    private $idProjet;

    /**
     * @var string
     *
     * @ORM\Column(name="libelle", type="string", length=255)
     */
    private $libelle;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_debut", type="date")
     */
    private $dateDebut;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_fin", type="date")
     */
    private $dateFin;


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
     * Set idProjet
     *
     * @param integer $idProjet
     * @return projet
     */
    public function setIdProjet($idProjet)
    {
        $this->idProjet = $idProjet;

        return $this;
    }

    /**
     * Get idProjet
     *
     * @return integer 
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }

    /**
     * Set libelle
     *
     * @param string $libelle
     * @return projet
     */
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get libelle
     *
     * @return string 
     */
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set dateDebut
     *
     * @param \DateTime $dateDebut
     * @return projet
     */
    public function setDateDebut($dateDebut)
    {
        $this->dateDebut = $dateDebut;

        return $this;
    }

    /**
     * Get dateDebut
     *
     * @return \DateTime 
     */
    public function getDateDebut()
    {
        return $this->dateDebut;
    }

   

    /**
     * Set dateFin
     *
     * @param \DateTime $dateFin
     * @return projet
     */
    public function setDateFin($dateFin)
    {
        $this->dateFin = $dateFin;

        return $this;
    }

    /**
     * Get dateFin
     *
     * @return \DateTime 
     */
    public function getDateFin()
    {
        return $this->dateFin;
    }

    /**
     * Set etudiant
     *
     * @param \Acme\DemoBundle\Entity\Demo\etudiant $etudiant
     * @return projet
     */
    public function setEtudiant(\Acme\DemoBundle\Entity\Demo\etudiant $etudiant = null)
    {
        $this->etudiant = $etudiant;

        return $this;
    }

    /**
     * Get etudiant
     *
     * @return \Acme\DemoBundle\Entity\Demo\etudiant 
     */
    public function getEtudiant()
    {
        return $this->etudiant;
    }
}
