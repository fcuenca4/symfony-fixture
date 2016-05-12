<?php

namespace MiAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goles
 *
 * @ORM\Table(name="goles", uniqueConstraints={@ORM\UniqueConstraint(name="id_jugador", columns={"id_jugador"}), @ORM\UniqueConstraint(name="id_equipo", columns={"id_equipo"}), @ORM\UniqueConstraint(name="id_partido", columns={"id_partido"})})
 * @ORM\Entity
 */
class Goles
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
     * @var \Equipos
     *
     * @ORM\ManyToOne(targetEntity="Equipos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipo", referencedColumnName="id")
     * })
     */
    private $idEquipo;

    /**
     * @var \Jugadores
     *
     * @ORM\ManyToOne(targetEntity="Jugadores")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_jugador", referencedColumnName="id")
     * })
     */
    private $idJugador;

    /**
     * @var \Partidos
     *
     * @ORM\ManyToOne(targetEntity="Partidos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_partido", referencedColumnName="id")
     * })
     */
    private $idPartido;



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
     * Set idEquipo
     *
     * @param \MiAppBundle\Entity\Equipos $idEquipo
     * @return Goles
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

    /**
     * Set idJugador
     *
     * @param \MiAppBundle\Entity\Jugadores $idJugador
     * @return Goles
     */
    public function setIdJugador(\MiAppBundle\Entity\Jugadores $idJugador = null)
    {
        $this->idJugador = $idJugador;

        return $this;
    }

    /**
     * Get idJugador
     *
     * @return \MiAppBundle\Entity\Jugadores 
     */
    public function getIdJugador()
    {
        return $this->idJugador;
    }

    /**
     * Set idPartido
     *
     * @param \MiAppBundle\Entity\Partidos $idPartido
     * @return Goles
     */
    public function setIdPartido(\MiAppBundle\Entity\Partidos $idPartido = null)
    {
        $this->idPartido = $idPartido;

        return $this;
    }

    /**
     * Get idPartido
     *
     * @return \MiAppBundle\Entity\Partidos 
     */
    public function getIdPartido()
    {
        return $this->idPartido;
    }
}
