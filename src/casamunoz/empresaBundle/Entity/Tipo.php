<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipo
 *
 * @ORM\Table(name="tipo")
 * @ORM\Entity
 */
class Tipo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_tipo_cliente", type="string", length=30, nullable=false)
     */
    private $nombreTipoCliente;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_tipo_cliente", type="string", length=50, nullable=true)
     */
    private $descripcionTipoCliente;



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
     * Set nombreTipoCliente
     *
     * @param string $nombreTipoCliente
     * @return Tipo
     */
    public function setNombreTipoCliente($nombreTipoCliente)
    {
        $this->nombreTipoCliente = $nombreTipoCliente;

        return $this;
    }

    /**
     * Get nombreTipoCliente
     *
     * @return string 
     */
    public function getNombreTipoCliente()
    {
        return $this->nombreTipoCliente;
    }

    /**
     * Set descripcionTipoCliente
     *
     * @param string $descripcionTipoCliente
     * @return Tipo
     */
    public function setDescripcionTipoCliente($descripcionTipoCliente)
    {
        $this->descripcionTipoCliente = $descripcionTipoCliente;

        return $this;
    }

    /**
     * Get descripcionTipoCliente
     *
     * @return string 
     */
    public function getDescripcionTipoCliente()
    {
        return $this->descripcionTipoCliente;
    }
    
    public function __toString() {
      return $this->nombreTipoCliente;
    }
    
}
