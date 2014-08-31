<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * IngresoProducto
 *
 * @ORM\Table(name="ingreso_producto", indexes={@ORM\Index(name="IDX_CDB5E70C3B7E4BA", columns={"pro_id"}), @ORM\Index(name="IDX_CDB5E7087CAE585", columns={"ing_id"})})
 * @ORM\Entity
 */
class IngresoProducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="ingreso_producto_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \Ingreso
     *
     * @ORM\ManyToOne(targetEntity="Ingreso")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ing_id", referencedColumnName="id")
     * })
     */
    private $ing;



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
     * Set pro
     *
     * @param \casamunoz\empresaBundle\Entity\Producto $pro
     * @return IngresoProducto
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

    /**
     * Set ing
     *
     * @param \casamunoz\empresaBundle\Entity\Ingreso $ing
     * @return IngresoProducto
     */
    public function setIng(\casamunoz\empresaBundle\Entity\Ingreso $ing = null)
    {
        $this->ing = $ing;

        return $this;
    }

    /**
     * Get ing
     *
     * @return \casamunoz\empresaBundle\Entity\Ingreso 
     */
    public function getIng()
    {
        return $this->ing;
    }
}
