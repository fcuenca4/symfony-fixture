<?php

namespace MiAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Equipos
 *
 * @ORM\Table(name="equipos")
 * @ORM\Entity
 */
class Equipos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=45, nullable=false)
     */
    private $nombre;

    /**
     * @var integer
     *
     * @ORM\Column(name="ptos", type="integer", nullable=true)
     */
    private $ptos;



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
     * Set nombre
     *
     * @param string $nombre
     * @return Equipos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string 
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set ptos
     *
     * @param integer $ptos
     * @return Equipos
     */
    public function setPtos($ptos)
    {
        $this->ptos = $ptos;

        return $this;
    }

    /**
     * Get ptos
     *
     * @return integer 
     */
    public function getPtos()
    {
        return $this->ptos;
    }
    public function __toString()
    {
        return "".$this->nombre;
    }
}
