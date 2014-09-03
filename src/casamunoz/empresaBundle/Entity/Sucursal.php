<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sucursal
 *
 * @ORM\Table(name="sucursal", indexes={@ORM\Index(name="IDX_E99C6D5676634E8A", columns={"mun_id"})})
 * @ORM\Entity
 */
class Sucursal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sucursal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_sucursal", type="string", length=30, nullable=false)
     */
    private $nombreSucursal;

    /**
     * @var string
     *
     * @ORM\Column(name="ubicacion", type="string", length=75, nullable=false)
     */
    private $ubicacion;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_sucursal", type="string", length=100, nullable=true)
     */
    private $descripcionSucursal;

    /**
     * @var \Municipio
     *
     * @ORM\ManyToOne(targetEntity="Municipio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="mun_id", referencedColumnName="id")
     * })
     */
    private $mun;



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
     * Set nombreSucursal
     *
     * @param string $nombreSucursal
     * @return Sucursal
     */
    public function setNombreSucursal($nombreSucursal)
    {
        $this->nombreSucursal = $nombreSucursal;

        return $this;
    }

    /**
     * Get nombreSucursal
     *
     * @return string 
     */
    public function getNombreSucursal()
    {
        return $this->nombreSucursal;
    }

    /**
     * Set ubicacion
     *
     * @param string $ubicacion
     * @return Sucursal
     */
    public function setUbicacion($ubicacion)
    {
        $this->ubicacion = $ubicacion;

        return $this;
    }

    /**
     * Get ubicacion
     *
     * @return string 
     */
    public function getUbicacion()
    {
        return $this->ubicacion;
    }

    /**
     * Set descripcionSucursal
     *
     * @param string $descripcionSucursal
     * @return Sucursal
     */
    public function setDescripcionSucursal($descripcionSucursal)
    {
        $this->descripcionSucursal = $descripcionSucursal;

        return $this;
    }

    /**
     * Get descripcionSucursal
     *
     * @return string 
     */
    public function getDescripcionSucursal()
    {
        return $this->descripcionSucursal;
    }

    /**
     * Set mun
     *
     * @param \casamunoz\empresaBundle\Entity\Municipio $mun
     * @return Sucursal
     */
    public function setMun(\casamunoz\empresaBundle\Entity\Municipio $mun = null)
    {
        $this->mun = $mun;

        return $this;
    }

    /**
     * Get mun
     *
     * @return \casamunoz\empresaBundle\Entity\Municipio 
     */
    public function getMun()
    {
        return $this->mun;
    }
    
    public function __toString() {
     return $this->nombreSucursal;
    }
    
}
