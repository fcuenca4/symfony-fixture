<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Partidos
 *
 * @ORM\Table(name="partidos", uniqueConstraints={@ORM\UniqueConstraint(name="id_equipo1", columns={"id_equipo1"}), @ORM\UniqueConstraint(name="id_equipo2", columns={"id_equipo2"}), @ORM\UniqueConstraint(name="id_arbitro", columns={"id_arbitro"}), @ORM\UniqueConstraint(name="id_editor", columns={"id_editor"})})
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


}
