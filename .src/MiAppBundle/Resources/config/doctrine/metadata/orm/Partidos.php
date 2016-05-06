<?php



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


}