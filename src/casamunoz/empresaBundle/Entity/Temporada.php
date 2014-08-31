<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Temporada
 *
 * @ORM\Table(name="temporada")
 * @ORM\Entity
 */
class Temporada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="temporada_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_temporada", type="string", length=50, nullable=false)
     */
    private $nombreTemporada;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_final", type="date", nullable=false)
     */
    private $fechaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_temporada", type="string", length=200, nullable=false)
     */
    private $descripcionTemporada;



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
     * Set nombreTemporada
     *
     * @param string $nombreTemporada
     * @return Temporada
     */
    public function setNombreTemporada($nombreTemporada)
    {
        $this->nombreTemporada = $nombreTemporada;

        return $this;
    }

    /**
     * Get nombreTemporada
     *
     * @return string 
     */
    public function getNombreTemporada()
    {
        return $this->nombreTemporada;
    }

    /**
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Temporada
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     * @return Temporada
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set descripcionTemporada
     *
     * @param string $descripcionTemporada
     * @return Temporada
     */
    public function setDescripcionTemporada($descripcionTemporada)
    {
        $this->descripcionTemporada = $descripcionTemporada;

        return $this;
    }

    /**
     * Get descripcionTemporada
     *
     * @return string 
     */
    public function getDescripcionTemporada()
    {
        return $this->descripcionTemporada;
    }
}
