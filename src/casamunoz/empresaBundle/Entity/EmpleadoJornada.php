<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * EmpleadoJornada
 *
 * @ORM\Table(name="empleado_jornada", indexes={@ORM\Index(name="IDX_657066FF7A663008", columns={"emp_id"}), @ORM\Index(name="IDX_657066FF5BF91936", columns={"jor_id"})})
 * @ORM\Entity
 */
class EmpleadoJornada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empleado_jornada_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \Jornada
     *
     * @ORM\ManyToOne(targetEntity="Jornada")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="jor_id", referencedColumnName="id")
     * })
     */
    private $jor;



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
     * Set emp
     *
     * @param \casamunoz\empresaBundle\Entity\Empleado $emp
     * @return EmpleadoJornada
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
     * Set jor
     *
     * @param \casamunoz\empresaBundle\Entity\Jornada $jor
     * @return EmpleadoJornada
     */
    public function setJor(\casamunoz\empresaBundle\Entity\Jornada $jor = null)
    {
        $this->jor = $jor;

        return $this;
    }

    /**
     * Get jor
     *
     * @return \casamunoz\empresaBundle\Entity\Jornada 
     */
    public function getJor()
    {
        return $this->jor;
    }
}
