<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empleado
 *
 * @ORM\Table(name="empleado", indexes={@ORM\Index(name="IDX_D9D9BF52BDD5F5BC", columns={"suc_id"}), @ORM\Index(name="IDX_D9D9BF52C3C6F69F", columns={"car_id"}), @ORM\Index(name="IDX_D9D9BF526BF9042", columns={"cub_id"}), @ORM\Index(name="IDX_D9D9BF52B304206A", columns={"per_id"})})
 * @ORM\Entity
 */
class Empleado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="empleado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_inicio", type="date", nullable=false)
     */
    private $fechaInicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_final", type="date", nullable=true)
     */
    private $fechaFinal;

    /**
     * @var string
     *
     * @ORM\Column(name="salario", type="decimal", precision=8, scale=2, nullable=false)
     */
    private $salario;

    /**
     * @var boolean
     *
     * @ORM\Column(name="disponibilidad", type="boolean", nullable=false)
     */
    private $disponibilidad;

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
     * @var \CargoEmpleado
     *
     * @ORM\ManyToOne(targetEntity="CargoEmpleado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="car_id", referencedColumnName="id")
     * })
     */
    private $car;

    /**
     * @var \Cubiculo
     *
     * @ORM\ManyToOne(targetEntity="Cubiculo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cub_id", referencedColumnName="id")
     * })
     */
    private $cub;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="per_id", referencedColumnName="id")
     * })
     */
    private $per;



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
     * Set fechaInicio
     *
     * @param \DateTime $fechaInicio
     * @return Empleado
     */
    public function setFechaInicio($fechaInicio)
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    /**
     * Get fechaInicio
     *
     * @return \DateTime 
     */
    public function getFechaInicio()
    {
        return $this->fechaInicio;
    }

    /**
     * Set fechaFinal
     *
     * @param \DateTime $fechaFinal
     * @return Empleado
     */
    public function setFechaFinal($fechaFinal)
    {
        $this->fechaFinal = $fechaFinal;

        return $this;
    }

    /**
     * Get fechaFinal
     *
     * @return \DateTime 
     */
    public function getFechaFinal()
    {
        return $this->fechaFinal;
    }

    /**
     * Set salario
     *
     * @param string $salario
     * @return Empleado
     */
    public function setSalario($salario)
    {
        $this->salario = $salario;

        return $this;
    }

    /**
     * Get salario
     *
     * @return string 
     */
    public function getSalario()
    {
        return $this->salario;
    }

    /**
     * Set disponibilidad
     *
     * @param boolean $disponibilidad
     * @return Empleado
     */
    public function setDisponibilidad($disponibilidad)
    {
        $this->disponibilidad = $disponibilidad;

        return $this;
    }

    /**
     * Get disponibilidad
     *
     * @return boolean 
     */
    public function getDisponibilidad()
    {
        return $this->disponibilidad;
    }

    /**
     * Set suc
     *
     * @param \casamunoz\empresaBundle\Entity\Sucursal $suc
     * @return Empleado
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
     * Set car
     *
     * @param \casamunoz\empresaBundle\Entity\CargoEmpleado $car
     * @return Empleado
     */
    public function setCar(\casamunoz\empresaBundle\Entity\CargoEmpleado $car = null)
    {
        $this->car = $car;

        return $this;
    }

    /**
     * Get car
     *
     * @return \casamunoz\empresaBundle\Entity\CargoEmpleado 
     */
    public function getCar()
    {
        return $this->car;
    }

    /**
     * Set cub
     *
     * @param \casamunoz\empresaBundle\Entity\Cubiculo $cub
     * @return Empleado
     */
    public function setCub(\casamunoz\empresaBundle\Entity\Cubiculo $cub = null)
    {
        $this->cub = $cub;

        return $this;
    }

    /**
     * Get cub
     *
     * @return \casamunoz\empresaBundle\Entity\Cubiculo 
     */
    public function getCub()
    {
        return $this->cub;
    }

    /**
     * Set per
     *
     * @param \casamunoz\empresaBundle\Entity\Persona $per
     * @return Empleado
     */
    public function setPer(\casamunoz\empresaBundle\Entity\Persona $per = null)
    {
        $this->per = $per;

        return $this;
    }

    /**
     * Get per
     *
     * @return \casamunoz\empresaBundle\Entity\Persona 
     */
    public function getPer()
    {
        return $this->per;
    }
}
