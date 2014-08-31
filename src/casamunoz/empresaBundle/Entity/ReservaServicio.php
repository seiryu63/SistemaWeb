<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ReservaServicio
 *
 * @ORM\Table(name="reserva_servicio", indexes={@ORM\Index(name="IDX_A39A92E5359052C4", columns={"ser_id"}), @ORM\Index(name="IDX_A39A92E54670E604", columns={"res_id"})})
 * @ORM\Entity
 */
class ReservaServicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reserva_servicio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \Reserva
     *
     * @ORM\ManyToOne(targetEntity="Reserva")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="res_id", referencedColumnName="id")
     * })
     */
    private $res;



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
     * Set ser
     *
     * @param \casamunoz\empresaBundle\Entity\Servicio $ser
     * @return ReservaServicio
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

    /**
     * Set res
     *
     * @param \casamunoz\empresaBundle\Entity\Reserva $res
     * @return ReservaServicio
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
}
