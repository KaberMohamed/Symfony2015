<?php

namespace Qcm\TestBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * DateFormation
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="Qcm\TestBundle\Entity\DateFormationRepository")
 */
class DateFormation
{

    /**
     * @ORM\ManyToOne(targetEntity="Qcm\TestBundle\Entity\Etudiant", inversedBy="DateFormation")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $Etudiant;

    /**
     * @ORM\ManyToOne(targetEntity="Qcm\TestBundle\Entity\Formation", inversedBy="DateFormation")
     * @ORM\JoinColumn(name="post_id", referencedColumnName="id")
     */
    private $Formation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;


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
     * Set date
     *
     * @param \DateTime $date
     * @return DateFormation
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime 
     */
    public function getDate()
    {
        return $this->date;
    }
}
