<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FacturaReserva
 *
 * @ORM\Table(name="factura_reserva", indexes={@ORM\Index(name="IDX_D86DE6E4670E604", columns={"res_id"}), @ORM\Index(name="IDX_D86DE6E7BAE57D6", columns={"fac_id"})})
 * @ORM\Entity
 */
class FacturaReserva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="factura_reserva_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Reserva
     *
     * @ORM\ManyToOne(targetEntity="Reserva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_id", referencedColumnName="id")
     * })
     */
    private $res;

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
     * Set res
     *
     * @param \casamunoz\empresaBundle\Entity\Reserva $res
     * @return FacturaReserva
     */
    public function setRes(\casamunoz\empresaBundle\Entity\Reserva $res = null)
    {
        $this->res = $res;

        return $this;
    }

    /**
     * Get res
     *
     * @return \casamunoz\empresaBundle\Entity\Reserva 
     */
    public function getRes()
    {
        return $this->res;
    }

    /**
     * Set fac
     *
     * @param \casamunoz\empresaBundle\Entity\Factura $fac
     * @return FacturaReserva
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
