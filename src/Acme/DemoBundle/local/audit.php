<?php

namespace Acme\DemoBundle\Entity\Demo;

use Doctrine\ORM\Mapping as ORM;

/**
 * audit
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Acme\DemoBundle\Entity\Demo\auditRepository")
 */
class audit
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
     * @ORM\Column(name="id_audit", type="integer")
     */
    private $idAudit;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date_modification", type="date")
     */
    private $dateModification;

    /**
     * @var boolean
     *
     * @ORM\Column(name="contenu_vu", type="boolean")
     */
    private $contenuVu;


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
     * Set idAudit
     *
     * @param integer $idAudit
     * @return audit
     */
    public function setIdAudit($idAudit)
    {
        $this->idAudit = $idAudit;

        return $this;
    }

    /**
     * Get idAudit
     *
     * @return integer 
     */
    public function getIdAudit()
    {
        return $this->idAudit;
    }

    /**
     * Set dateModification
     *
     * @param \DateTime $dateModification
     * @return audit
     */
    public function setDateModification($dateModification)
    {
        $this->dateModification = $dateModification;

        return $this;
    }

    /**
     * Get dateModification
     *
     * @return \DateTime 
     */
    public function getDateModification()
    {
        return $this->dateModification;
    }

    /**
     * Set contenuVu
     *
     * @param boolean $contenuVu
     * @return audit
     */
    public function setContenuVu($contenuVu)
    {
        $this->contenuVu = $contenuVu;

        return $this;
    }

    /**
     * Get contenuVu
     *
     * @return boolean 
     */
    public function getContenuVu()
    {
        return $this->contenuVu;
    }
}
