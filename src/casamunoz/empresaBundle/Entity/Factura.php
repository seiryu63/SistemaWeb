<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Factura
 *
 * @ORM\Table(name="factura", indexes={@ORM\Index(name="IDX_F9EBA0097A663008", columns={"emp_id"}), @ORM\Index(name="IDX_F9EBA009476C47F6", columns={"tip_id"})})
 * @ORM\Entity
 */
class Factura
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="factura_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_factura", type="date", nullable=false)
     */
    private $fechaFactura;

    /**
     * @var string
     *
     * @ORM\Column(name="monto_total", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $montoTotal;

    /**
     * @var \Empleado
     *
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emp_id", referencedColumnName="id")
     * })
     */
    private $emp;

    /**
     * @var \TipoPago
     *
     * @ORM\ManyToOne(targetEntity="TipoPago")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tip_id", referencedColumnName="id")
     * })
     */
    private $tip;



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
     * Set fechaFactura
     *
     * @param \DateTime $fechaFactura
     * @return Factura
     */
    public function setFechaFactura($fechaFactura)
    {
        $this->fechaFactura = $fechaFactura;

        return $this;
    }

    /**
     * Get fechaFactura
     *
     * @return \DateTime 
     */
    public function getFechaFactura()
    {
        return $this->fechaFactura;
    }

    /**
     * Set montoTotal
     *
     * @param string $montoTotal
     * @return Factura
     */
    public function setMontoTotal($montoTotal)
    {
        $this->montoTotal = $montoTotal;

        return $this;
    }

    /**
     * Get montoTotal
     *
     * @return string 
     */
    public function getMontoTotal()
    {
        return $this->montoTotal;
    }

    /**
     * Set emp
     *
     * @param \casamunoz\empresaBundle\Entity\Empleado $emp
     * @return Factura
     */
    public function setEmp(\casamunoz\empresaBundle\Entity\Empleado $emp = null)
    {
        $this->emp = $emp;

        return $this;
    }

    /**
     * Get emp
     *
     * @return \casamunoz\empresaBundle\Entity\Empleado 
     */
    public function getEmp()
    {
        return $this->emp;
    }

    /**
     * Set tip
     *
     * @param \casamunoz\empresaBundle\Entity\TipoPago $tip
     * @return Factura
     */
    public function setTip(\casamunoz\empresaBundle\Entity\TipoPago $tip = null)
    {
        $this->tip = $tip;

        return $this;
    }

    /**
     * Get tip
     *
     * @return \casamunoz\empresaBundle\Entity\TipoPago 
     */
    public function getTip()
    {
        return $this->tip;
    }
}
