<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Inventario
 *
 * @ORM\Table(name="inventario", indexes={@ORM\Index(name="IDX_6A194EF5BDD5F5BC", columns={"suc_id"}), @ORM\Index(name="IDX_6A194EF5C3B7E4BA", columns={"pro_id"})})
 * @ORM\Entity
 */
class Inventario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="inventario_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Producto
     *
     * @ORM\ManyToOne(targetEntity="Producto")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="pro_id", referencedColumnName="id")
     * })
     */
    private $pro;



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
     * @return Inventario
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
     * Set pro
     *
     * @param \casamunoz\empresaBundle\Entity\Producto $pro
     * @return Inventario
     */
    public function setPro(\casamunoz\empresaBundle\Entity\Producto $pro = null)
    {
        $this->pro = $pro;

        return $this;
    }

    /**
     * Get pro
     *
     * @return \casamunoz\empresaBundle\Entity\Producto 
     */
    public function getPro()
    {
        return $this->pro;
    }
}
