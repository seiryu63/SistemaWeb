<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historial
 *
 * @ORM\Table(name="historial")
 * @ORM\Entity
 */
class Historial
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historial_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_ultima_visita", type="date", nullable=false)
     */
    private $fechaUltimaVisita;



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
     * Set fechaUltimaVisita
     *
     * @param \DateTime $fechaUltimaVisita
     * @return Historial
     */
    public function setFechaUltimaVisita($fechaUltimaVisita)
    {
        $this->fechaUltimaVisita = $fechaUltimaVisita;

        return $this;
    }

    /**
     * Get fechaUltimaVisita
     *
     * @return \DateTime 
     */
    public function getFechaUltimaVisita()
    {
        return $this->fechaUltimaVisita;
    }
}
