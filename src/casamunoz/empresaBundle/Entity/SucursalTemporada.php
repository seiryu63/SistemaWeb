<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SucursalTemporada
 *
 * @ORM\Table(name="sucursal_temporada", indexes={@ORM\Index(name="IDX_20C6AD26BDD5F5BC", columns={"suc_id"}), @ORM\Index(name="IDX_20C6AD2620EF25B5", columns={"tem_id"})})
 * @ORM\Entity
 */
class SucursalTemporada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="sucursal_temporada_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Temporada
     *
     * @ORM\ManyToOne(targetEntity="Temporada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tem_id", referencedColumnName="id")
     * })
     */
    private $tem;



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
     * @return SucursalTemporada
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
     * Set tem
     *
     * @param \casamunoz\empresaBundle\Entity\Temporada $tem
     * @return SucursalTemporada
     */
    public function setTem(\casamunoz\empresaBundle\Entity\Temporada $tem = null)
    {
        $this->tem = $tem;

        return $this;
    }

    /**
     * Get tem
     *
     * @return \casamunoz\empresaBundle\Entity\Temporada 
     */
    public function getTem()
    {
        return $this->tem;
    }
}
