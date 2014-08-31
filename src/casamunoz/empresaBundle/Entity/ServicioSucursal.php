<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServicioSucursal
 *
 * @ORM\Table(name="servicio_sucursal", indexes={@ORM\Index(name="IDX_FD240283BDD5F5BC", columns={"suc_id"}), @ORM\Index(name="IDX_FD240283359052C4", columns={"ser_id"})})
 * @ORM\Entity
 */
class ServicioSucursal
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="servicio_sucursal_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \Sucursal
     *
     * @ORM\ManyToOne(targetEntity="Sucursal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="suc_id", referencedColumnName="id")
     * })
     */
    private $suc;

    /**
     * @var \Servicio
     *
     * @ORM\ManyToOne(targetEntity="Servicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ser_id", referencedColumnName="id")
     * })
     */
    private $ser;



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
     * Set suc
     *
     * @param \casamunoz\empresaBundle\Entity\Sucursal $suc
     * @return ServicioSucursal
     */
    public function setSuc(\casamunoz\empresaBundle\Entity\Sucursal $suc = null)
    {
        $this->suc = $suc;

        return $this;
    }

    /**
     * Get suc
     *
     * @return \casamunoz\empresaBundle\Entity\Sucursal 
     */
    public function getSuc()
    {
        return $this->suc;
    }

    /**
     * Set ser
     *
     * @param \casamunoz\empresaBundle\Entity\Servicio $ser
     * @return ServicioSucursal
     */
    public function setSer(\casamunoz\empresaBundle\Entity\Servicio $ser = null)
    {
        $this->ser = $ser;

        return $this;
    }

    /**
     * Get ser
     *
     * @return \casamunoz\empresaBundle\Entity\Servicio 
     */
    public function getSer()
    {
        return $this->ser;
    }
}
