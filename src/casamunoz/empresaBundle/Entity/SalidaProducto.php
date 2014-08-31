<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * SalidaProducto
 *
 * @ORM\Table(name="salida_producto", indexes={@ORM\Index(name="IDX_41C8357EC3B7E4BA", columns={"pro_id"}), @ORM\Index(name="IDX_41C8357E70D6D4A8", columns={"sal_id"})})
 * @ORM\Entity
 */
class SalidaProducto
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="salida_producto_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Salida
     *
     * @ORM\ManyToOne(targetEntity="Salida")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="sal_id", referencedColumnName="id")
     * })
     */
    private $sal;



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
     * @return SalidaProducto
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
     * Set sal
     *
     * @param \casamunoz\empresaBundle\Entity\Salida $sal
     * @return SalidaProducto
     */
    public function setSal(\casamunoz\empresaBundle\Entity\Salida $sal = null)
    {
        $this->sal = $sal;

        return $this;
    }

    /**
     * Get sal
     *
     * @return \casamunoz\empresaBundle\Entity\Salida 
     */
    public function getSal()
    {
        return $this->sal;
    }
}
