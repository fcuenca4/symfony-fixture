<?php

namespace MiAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partidos
 *
 * @ORM\Table(name="partidos")
 * @ORM\Entity
 */
class Partidos
{
    /**
     * @var integer
     *
     * @ORM\Column(name="fecha_partido", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $fechaPartido;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_arbitro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idArbitro;



    /**
     * Set fechaPartido
     *
     * @param integer $fechaPartido
     * @return Partidos
     */
    public function setFechaPartido($fechaPartido)
    {
        $this->fechaPartido = $fechaPartido;

        return $this;
    }

    /**
     * Get fechaPartido
     *
     * @return integer 
     */
    public function getFechaPartido()
    {
        return $this->fechaPartido;
    }

    /**
     * Set idArbitro
     *
     * @param integer $idArbitro
     * @return Partidos
     */
    public function setIdArbitro($idArbitro)
    {
        $this->idArbitro = $idArbitro;

        return $this;
    }

    /**
     * Get idArbitro
     *
     * @return integer 
     */
    public function getIdArbitro()
    {
        return $this->idArbitro;
    }
}
