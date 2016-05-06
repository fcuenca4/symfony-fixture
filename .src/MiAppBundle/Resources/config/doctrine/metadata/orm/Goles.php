<?php



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


}
