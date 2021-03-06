<?php

namespace Acme\DemoBundle\Entity\Demo;

use Doctrine\ORM\Mapping as ORM;

/**
 * etudiant
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\Demo\etudiantRepository")
 */
class etudiant
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
     * @ORM\OneToOne(targetEntity="options_compte", cascade={"persist"})
     */
    private $options_compte;

    
    /**
     * @var integer
     *
     * @ORM\Column(name="id_etudiant", type="integer")
     */
    private $idEtudiant;

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=255)
     */
    private $nom;


    /**
     *@ORM\OneToMany(targetEntity="Annee_Formation_Etudiant", cascade={"persist"}, mappedBy="etudiant")
     *
     */
    private $annee_formation;
    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=255)
     */
    private $telephone;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=255)
     */
    private $email;

    /**
     * @var string
     *
     * @ORM\Column(name="adresse", type="string", length=255)
     */
    private $adresse;

    /**
     * @var string
     *
     * @ORM\Column(name="information_contrat", type="string", length=1000)
     */
    private $informationContrat;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_contrat", type="integer")
     */
    private $typeContrat;


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
     * Set idEtudiant
     *
     * @param integer $idEtudiant
     * @return etudiant
     */
    public function setIdEtudiant($idEtudiant)
    {
        $this->idEtudiant = $idEtudiant;

        return $this;
    }

    /**
     * Get idEtudiant
     *
     * @return integer 
     */
    public function getIdEtudiant()
    {
        return $this->idEtudiant;
    }

    /**
     * Set nom
     *
     * @param string $nom
     * @return etudiant
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string 
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set telephone
     *
     * @param string $telephone
     * @return etudiant
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return string 
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return etudiant
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     * @return etudiant
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string 
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Set informationContrat
     *
     * @param string $informationContrat
     * @return etudiant
     */
    public function setInformationContrat($informationContrat)
    {
        $this->informationContrat = $informationContrat;

        return $this;
    }

    /**
     * Get informationContrat
     *
     * @return string 
     */
    public function getInformationContrat()
    {
        return $this->informationContrat;
    }

    /**
     * Set typeContrat
     *
     * @param integer $typeContrat
     * @return etudiant
     */
    public function setTypeContrat($typeContrat)
    {
        $this->typeContrat = $typeContrat;

        return $this;
    }

    /**
     * Get typeContrat
     *
     * @return integer 
     */
    public function getTypeContrat()
    {
        return $this->typeContrat;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->annee_formation = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add annee_formation
     *
     * @param \Acme\DemoBundle\Entity\Demo\Annee_Formation_Etudiant $anneeFormation
     * @return etudiant
     */
    public function addAnneeFormation(\Acme\DemoBundle\Entity\Demo\Annee_Formation_Etudiant $anneeFormation)
    {
        $this->annee_formation[] = $anneeFormation;

        return $this;
    }

    /**
     * Remove annee_formation
     *
     * @param \Acme\DemoBundle\Entity\Demo\Annee_Formation_Etudiant $anneeFormation
     */
    public function removeAnneeFormation(\Acme\DemoBundle\Entity\Demo\Annee_Formation_Etudiant $anneeFormation)
    {
        $this->annee_formation->removeElement($anneeFormation);
    }

    /**
     * Get annee_formation
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getAnneeFormation()
    {
        return $this->annee_formation;
    }

    /**
     * Set option_compte
     *
     * @param \Acme\DemoBundle\Entity\Demo\option_compte $optionCompte
     * @return etudiant
     */
    public function setOptionCompte(\Acme\DemoBundle\Entity\Demo\option_compte $optionCompte = null)
    {
        $this->option_compte = $optionCompte;

        return $this;
    }

    /**
     * Get option_compte
     *
     * @return \Acme\DemoBundle\Entity\Demo\option_compte 
     */
    public function getOptionCompte()
    {
        return $this->option_compte;
    }

    /**
     * Set options_compte
     *
     * @param \Acme\DemoBundle\Entity\Demo\options_compte $optionsCompte
     * @return etudiant
     */
    public function setOptionsCompte(\Acme\DemoBundle\Entity\Demo\options_compte $optionsCompte = null)
    {
        $this->options_compte = $optionsCompte;

        return $this;
    }

    /**
     * Get options_compte
     *
     * @return \Acme\DemoBundle\Entity\Demo\options_compte 
     */
    public function getOptionsCompte()
    {
        return $this->options_compte;
    }
}
