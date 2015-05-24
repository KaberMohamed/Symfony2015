<?php

namespace Acme\DemoBundle\Entity\Demo;

use Doctrine\ORM\Mapping as ORM;

/**
 * rapport
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\Demo\rapportRepository")
 */
class rapport
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
     * @ORM\ManyToOne(targetEntity="etudiant", inversedBy="rapport")
     * @ORM\JoinColumn(name="id_etudiant", referencedColumnName="id")
     */
    private $etudiant;

    /**
     *@ORM\OneToMany(targetEntity="remarque_responsable_rapport", cascade={"persist"}, mappedBy="rapport")
     *
     */
    private $remarque;


    /**
     * @ORM\OneToOne(targetEntity="audit", cascade={"persist"})
     */
    private $audit;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_rapport", type="integer")
     */
    private $idRapport;

    /**
     * @var string
     *
     * @ORM\Column(name="periode", type="string", length=255)
     */
    private $periode;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $date;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="string", length=1000)
     */
    private $contenu;


    /**
     * Get id
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idRapport
     *
     * @param integer $idRapport
     * @return rapport
     */
    public function setIdRapport($idRapport)
    {
        $this->idRapport = $idRapport;

        return $this;
    }

    /**
     * Get idRapport
     *
     * @return integer 
     */
    public function getIdRapport()
    {
        return $this->idRapport;
    }

    /**
     * Set periode
     *
     * @param string $periode
     * @return rapport
     */
    public function setPeriode($periode)
    {
        $this->periode = $periode;

        return $this;
    }

    /**
     * Get periode
     *
     * @return string 
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Set date
     *
     * @param string $date
     * @return rapport
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string 
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     * @return rapport
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string 
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set etudiant
     *
     * @param \Acme\DemoBundle\Entity\Demo\etudiant $etudiant
     * @return rapport
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
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->remarque = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add remarque
     *
     * @param \Acme\DemoBundle\Entity\Demo\remarque_responsable_rapport $remarque
     * @return rapport
     */
    public function addRemarque(\Acme\DemoBundle\Entity\Demo\remarque_responsable_rapport $remarque)
    {
        $this->remarque[] = $remarque;

        return $this;
    }

    /**
     * Remove remarque
     *
     * @param \Acme\DemoBundle\Entity\Demo\remarque_responsable_rapport $remarque
     */
    public function removeRemarque(\Acme\DemoBundle\Entity\Demo\remarque_responsable_rapport $remarque)
    {
        $this->remarque->removeElement($remarque);
    }

    /**
     * Get remarque
     *
     * @return \Doctrine\Common\Collections\Collection 
     */
    public function getRemarque()
    {
        return $this->remarque;
    }

    /**
     * Set audit
     *
     * @param \Acme\DemoBundle\Entity\Demo\audit $audit
     * @return rapport
     */
    public function setAudit(\Acme\DemoBundle\Entity\Demo\audit $audit = null)
    {
        $this->audit = $audit;

        return $this;
    }

    /**
     * Get audit
     *
     * @return \Acme\DemoBundle\Entity\Demo\audit 
     */
    public function getAudit()
    {
        return $this->audit;
    }
}
