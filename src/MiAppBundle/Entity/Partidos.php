<?php

namespace MiAppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Partidos
 *
 * @ORM\Table(name="partidos", indexes={@ORM\Index(name="FK_arbitro", columns={"id_arbitro"}), @ORM\Index(name="FK_editor", columns={"id_editor"}), @ORM\Index(name="FK_equipo1", columns={"id_equipo1"}), @ORM\Index(name="FK_equipo2", columns={"id_equipo2"})})
 * @ORM\Entity
 */
class Partidos
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
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_partido", type="date", nullable=false)
     */
    private $fechaPartido;

    /**
     * @var integer
     *
     * @ORM\Column(name="result_eq1", type="integer", nullable=false)
     */
    private $resultEq1;

    /**
     * @var integer
     *
     * @ORM\Column(name="result_eq2", type="integer", nullable=false)
     */
    private $resultEq2;

    /**
     * @var string
     *
     * @ORM\Column(name="observacion", type="text", length=65535, nullable=true)
     */
    private $observacion;

    /**
     * @var boolean
     *
     * @ORM\Column(name="termino", type="boolean", nullable=false)
     */
    private $termino;

    /**
     * @var \Arbitros
     *
     * @ORM\ManyToOne(targetEntity="Arbitros")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_arbitro", referencedColumnName="id")
     * })
     */
    private $idArbitro;

    /**
     * @var \FosUser
     *
     * @ORM\ManyToOne(targetEntity="FosUser")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_editor", referencedColumnName="id")
     * })
     */
    private $idEditor;

    /**
     * @var \Equipos
     *
     * @ORM\ManyToOne(targetEntity="Equipos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipo1", referencedColumnName="id")
     * })
     */
    private $idEquipo1;

    /**
     * @var \Equipos
     *
     * @ORM\ManyToOne(targetEntity="Equipos")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_equipo2", referencedColumnName="id")
     * })
     */
    private $idEquipo2;



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
     * Set fechaPartido
     *
     * @param \DateTime $fechaPartido
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
     * @return \DateTime 
     */
    public function getFechaPartido()
    {
        return $this->fechaPartido;
    }

    /**
     * Set resultEq1
     *
     * @param integer $resultEq1
     * @return Partidos
     */
    public function setResultEq1($resultEq1)
    {
        $this->resultEq1 = $resultEq1;

        return $this;
    }

    /**
     * Get resultEq1
     *
     * @return integer 
     */
    public function getResultEq1()
    {
        return $this->resultEq1;
    }

    /**
     * Set resultEq2
     *
     * @param integer $resultEq2
     * @return Partidos
     */
    public function setResultEq2($resultEq2)
    {
        $this->resultEq2 = $resultEq2;

        return $this;
    }

    /**
     * Get resultEq2
     *
     * @return integer 
     */
    public function getResultEq2()
    {
        return $this->resultEq2;
    }

    /**
     * Set observacion
     *
     * @param string $observacion
     * @return Partidos
     */
    public function setObservacion($observacion)
    {
        $this->observacion = $observacion;

        return $this;
    }

    /**
     * Get observacion
     *
     * @return string 
     */
    public function getObservacion()
    {
        return $this->observacion;
    }

    /**
     * Set termino
     *
     * @param boolean $termino
     * @return Partidos
     */
    public function setTermino($termino)
    {
        $this->termino = $termino;

        return $this;
    }

    /**
     * Get termino
     *
     * @return boolean 
     */
    public function getTermino()
    {
        return $this->termino;
    }

    /**
     * Set idArbitro
     *
     * @param \MiAppBundle\Entity\Arbitros $idArbitro
     * @return Partidos
     */
    public function setIdArbitro(\MiAppBundle\Entity\Arbitros $idArbitro = null)
    {
        $this->idArbitro = $idArbitro;

        return $this;
    }

    /**
     * Get idArbitro
     *
     * @return \MiAppBundle\Entity\Arbitros 
     */
    public function getIdArbitro()
    {
        return $this->idArbitro;
    }

    /**
     * Set idEditor
     *
     * @param \MiAppBundle\Entity\FosUser $idEditor
     * @return Partidos
     */
    public function setIdEditor(\MiAppBundle\Entity\FosUser $idEditor = null)
    {
        $this->idEditor = $idEditor;

        return $this;
    }

    /**
     * Get idEditor
     *
     * @return \MiAppBundle\Entity\FosUser 
     */
    public function getIdEditor()
    {
        return $this->idEditor;
    }

    /**
     * Set idEquipo1
     *
     * @param \MiAppBundle\Entity\Equipos $idEquipo1
     * @return Partidos
     */
    public function setIdEquipo1(\MiAppBundle\Entity\Equipos $idEquipo1 = null)
    {
        $this->idEquipo1 = $idEquipo1;

        return $this;
    }

    /**
     * Get idEquipo1
     *
     * @return \MiAppBundle\Entity\Equipos 
     */
    public function getIdEquipo1()
    {
        return $this->idEquipo1;
    }

    /**
     * Set idEquipo2
     *
     * @param \MiAppBundle\Entity\Equipos $idEquipo2
     * @return Partidos
     */
    public function setIdEquipo2(\MiAppBundle\Entity\Equipos $idEquipo2 = null)
    {
        $this->idEquipo2 = $idEquipo2;

        return $this;
    }

    /**
     * Get idEquipo2
     *
     * @return \MiAppBundle\Entity\Equipos 
     */
    public function getIdEquipo2()
    {
        return $this->idEquipo2;
    }
}
