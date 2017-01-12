<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Name
 *
 * @ORM\Table(name="name")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\NameRepository")
 */
class Name
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
     * @var string
     *
     * @ORM\Column(name="noms", type="string", length=255)
     */
    private $noms;


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
     * Set noms
     *
     * @param string $noms
     *
     * @return Name
     */
    public function setNoms($noms)
    {
        $this->noms = $noms;

        return $this;
    }

    /**
     * Get noms
     *
     * @return string
     */
    public function getNoms()
    {
        return $this->noms;
    }
}

