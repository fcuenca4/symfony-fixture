<?php

namespace MiAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jugadores
 *
 * @ORM\Table(name="jugadores", uniqueConstraints={@ORM\UniqueConstraint(name="id_equipo", columns={"id_equipo"})})
 * @ORM\Entity
 */
class Jugadores
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
     * @ORM\Column(name="edad", type="integer", nullable=false)
     */
    private $edad;

    /**
     * @var \Equipos
     *
     * @ORM\ManyToOne(targetEntity="Equipos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipo", referencedColumnName="id")
     * })
     */
    private $idEquipo;

	/**
     * @var integer
     *
     * @ORM\Column(name="goles", type="integer", nullable=false)
     */
    private $goles;


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
     * Set goles
     *
     * @param integer $goles
     * @return Jugadores
     */
    public function setGoles($goles)
    {
        $this->goles = $goles;

        return $this;
    }

    /**
     * Get goles
     *
     * @return integer 
     */
    public function getGoles()
    {
        return $this->goles;
    }

	
    /**
     * Set nombre
     *
     * @param string $nombre
     * @return Jugadores
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
     * Set edad
     *
     * @param integer $edad
     * @return Jugadores
     */
    public function setEdad($edad)
    {
        $this->edad = $edad;

        return $this;
    }

    /**
     * Get edad
     *
     * @return integer 
     */
    public function getEdad()
    {
        return $this->edad;
    }

    /**
     * Set idEquipo
     *
     * @param \MiAppBundle\Entity\Equipos $idEquipo
     * @return Jugadores
     */
    public function setIdEquipo(\MiAppBundle\Entity\Equipos $idEquipo = null)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return \MiAppBundle\Entity\Equipos 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }
}
