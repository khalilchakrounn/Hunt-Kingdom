<?php

namespace EvenementBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * inscription
 *
 * @ORM\Table(name="inscription")
 * @ORM\Entity(repositoryClass="EvenementBundle\Repository\InscriptionRepository")
 */
class Inscription
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="EvenementBundle\Entity\Evenement")
     * @ORM\JoinColumn(name="idevent", referencedColumnName="id")
     */
    private $idevent;

    /**
     * @var int
     * @ORM\ManyToOne(targetEntity="MainBundle\Entity\User")
     * @ORM\JoinColumn(name="iduser", referencedColumnName="id")
     */
    private $iduser;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set idevent
     *
     * @param integer $idevent
     *
     * @return inscription
     */
    public function setIdevent($idevent)
    {
        $this->idevent = $idevent;

        return $this;
    }

    /**
     * Get idevent
     *
     * @return int
     */
    public function getIdevent()
    {
        return $this->idevent;
    }

    /**
     * Set iduser
     *
     * @param integer $iduser
     *
     * @return inscription
     */
    public function setIduser($iduser)
    {
        $this->iduser = $iduser;

        return $this;
    }

    /**
     * Get iduser
     *
     * @return int
     */
    public function getIduser()
    {
        return $this->iduser;
    }

}
