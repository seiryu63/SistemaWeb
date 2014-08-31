<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Salida
 *
 * @ORM\Table(name="salida", indexes={@ORM\Index(name="IDX_95F4C7487BAE57D6", columns={"fac_id"})})
 * @ORM\Entity
 */
class Salida
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="salida_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="cantidad_producto", type="integer", nullable=false)
     */
    private $cantidadProducto;

    /**
     * @var string
     *
     * @ORM\Column(name="precio_unitario", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $precioUnitario;

    /**
     * @var \Factura
     *
     * @ORM\ManyToOne(targetEntity="Factura")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="fac_id", referencedColumnName="id")
     * })
     */
    private $fac;



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
     * Set cantidadProducto
     *
     * @param integer $cantidadProducto
     * @return Salida
     */
    public function setCantidadProducto($cantidadProducto)
    {
        $this->cantidadProducto = $cantidadProducto;

        return $this;
    }

    /**
     * Get cantidadProducto
     *
     * @return integer 
     */
    public function getCantidadProducto()
    {
        return $this->cantidadProducto;
    }

    /**
     * Set precioUnitario
     *
     * @param string $precioUnitario
     * @return Salida
     */
    public function setPrecioUnitario($precioUnitario)
    {
        $this->precioUnitario = $precioUnitario;

        return $this;
    }

    /**
     * Get precioUnitario
     *
     * @return string 
     */
    public function getPrecioUnitario()
    {
        return $this->precioUnitario;
    }

    /**
     * Set fac
     *
     * @param \casamunoz\empresaBundle\Entity\Factura $fac
     * @return Salida
     */
    public function setFac(\casamunoz\empresaBundle\Entity\Factura $fac = null)
    {
        $this->fac = $fac;

        return $this;
    }

    /**
     * Get fac
     *
     * @return \casamunoz\empresaBundle\Entity\Factura 
     */
    public function getFac()
    {
        return $this->fac;
    }
}
