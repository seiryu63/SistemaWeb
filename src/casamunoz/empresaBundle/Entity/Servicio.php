<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Servicio
 *
 * @ORM\Table(name="servicio")
 * @ORM\Entity
 */
class Servicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="servicio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_servicio", type="string", length=30, nullable=false)
     */
    private $nombreServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="tiempo_servicio", type="string", length=25, nullable=false)
     */
    private $tiempoServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="costo_servicio", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $costoServicio;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_servicio", type="string", length=100, nullable=false)
     */
    private $descripcionServicio;



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
     * Set nombreServicio
     *
     * @param string $nombreServicio
     * @return Servicio
     */
    public function setNombreServicio($nombreServicio)
    {
        $this->nombreServicio = $nombreServicio;

        return $this;
    }

    /**
     * Get nombreServicio
     *
     * @return string 
     */
    public function getNombreServicio()
    {
        return $this->nombreServicio;
    }

    /**
     * Set tiempoServicio
     *
     * @param string $tiempoServicio
     * @return Servicio
     */
    public function setTiempoServicio($tiempoServicio)
    {
        $this->tiempoServicio = $tiempoServicio;

        return $this;
    }

    /**
     * Get tiempoServicio
     *
     * @return string 
     */
    public function getTiempoServicio()
    {
        return $this->tiempoServicio;
    }

    /**
     * Set costoServicio
     *
     * @param string $costoServicio
     * @return Servicio
     */
    public function setCostoServicio($costoServicio)
    {
        $this->costoServicio = $costoServicio;

        return $this;
    }

    /**
     * Get costoServicio
     *
     * @return string 
     */
    public function getCostoServicio()
    {
        return $this->costoServicio;
    }

    /**
     * Set descripcionServicio
     *
     * @param string $descripcionServicio
     * @return Servicio
     */
    public function setDescripcionServicio($descripcionServicio)
    {
        $this->descripcionServicio = $descripcionServicio;

        return $this;
    }

    /**
     * Get descripcionServicio
     *
     * @return string 
     */
    public function getDescripcionServicio()
    {
        return $this->descripcionServicio;
    }
}
