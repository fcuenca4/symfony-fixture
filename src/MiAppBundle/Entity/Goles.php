<?php

namespace MiAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Goles
 *
 * @ORM\Table(name="goles")
 * @ORM\Entity
 */
class Goles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_equipo", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idEquipo;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_jugador", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idJugador;

    /**
     * @var integer
     *
     * @ORM\Column(name="see_goal", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $seeGoal;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fecha;



    /**
     * Set idEquipo
     *
     * @param integer $idEquipo
     * @return Goles
     */
    public function setIdEquipo($idEquipo)
    {
        $this->idEquipo = $idEquipo;

        return $this;
    }

    /**
     * Get idEquipo
     *
     * @return integer 
     */
    public function getIdEquipo()
    {
        return $this->idEquipo;
    }

    /**
     * Set idJugador
     *
     * @param integer $idJugador
     * @return Goles
     */
    public function setIdJugador($idJugador)
    {
        $this->idJugador = $idJugador;

        return $this;
    }

    /**
     * Get idJugador
     *
     * @return integer 
     */
    public function getIdJugador()
    {
        return $this->idJugador;
    }

    /**
     * Set seeGoal
     *
     * @param integer $seeGoal
     * @return Goles
     */
    public function setSeeGoal($seeGoal)
    {
        $this->seeGoal = $seeGoal;

        return $this;
    }

    /**
     * Get seeGoal
     *
     * @return integer 
     */
    public function getSeeGoal()
    {
        return $this->seeGoal;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Goles
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }
}
