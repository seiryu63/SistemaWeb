<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * TipoPago
 *
 * @ORM\Table(name="tipo_pago")
 * @ORM\Entity
 */
class TipoPago
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="tipo_pago_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var boolean
     *
     * @ORM\Column(name="nombre_tipo_pago", type="boolean", nullable=false)
     */
    private $nombreTipoPago;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_tipo_pago", type="string", length=50, nullable=false)
     */
    private $descripcionTipoPago;



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
     * Set nombreTipoPago
     *
     * @param boolean $nombreTipoPago
     * @return TipoPago
     */
    public function setNombreTipoPago($nombreTipoPago)
    {
        $this->nombreTipoPago = $nombreTipoPago;

        return $this;
    }

    /**
     * Get nombreTipoPago
     *
     * @return boolean 
     */
    public function getNombreTipoPago()
    {
        return $this->nombreTipoPago;
    }

    /**
     * Set descripcionTipoPago
     *
     * @param string $descripcionTipoPago
     * @return TipoPago
     */
    public function setDescripcionTipoPago($descripcionTipoPago)
    {
        $this->descripcionTipoPago = $descripcionTipoPago;

        return $this;
    }

    /**
     * Get descripcionTipoPago
     *
     * @return string 
     */
    public function getDescripcionTipoPago()
    {
        return $this->descripcionTipoPago;
    }
}
