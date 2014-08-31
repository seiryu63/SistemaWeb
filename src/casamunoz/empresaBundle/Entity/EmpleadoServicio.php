<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmpleadoServicio
 *
 * @ORM\Table(name="empleado_servicio", indexes={@ORM\Index(name="IDX_BD5E11C0359052C4", columns={"ser_id"}), @ORM\Index(name="IDX_BD5E11C07A663008", columns={"emp_id"})})
 * @ORM\Entity
 */
class EmpleadoServicio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empleado_servicio_id_seq", allocationSize=1, initialValue=1)
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
     * @var \Empleado
     *
     * @ORM\ManyToOne(targetEntity="Empleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="emp_id", referencedColumnName="id")
     * })
     */
    private $emp;



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
     * @return EmpleadoServicio
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
     * Set emp
     *
     * @param \casamunoz\empresaBundle\Entity\Empleado $emp
     * @return EmpleadoServicio
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
}
