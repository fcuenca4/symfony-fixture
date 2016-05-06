<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * TiposEquipos
 *
 * @ORM\Table(name="tipos_equipos")
 * @ORM\Entity
 */
class TiposEquipos
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
     * @ORM\Column(name="nombre", type="text", length=65535, nullable=false)
     */
    private $nombre;


}
