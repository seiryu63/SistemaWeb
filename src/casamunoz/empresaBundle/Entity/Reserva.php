<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Reserva
 *
 * @ORM\Table(name="reserva", indexes={@ORM\Index(name="IDX_188D2E3BBC4EE2B0", columns={"cli_id"}), @ORM\Index(name="IDX_188D2E3B5BF91936", columns={"jor_id"}), @ORM\Index(name="IDX_188D2E3B7A663008", columns={"emp_id"})})
 * @ORM\Entity
 */
class Reserva
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="reserva_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_reserva", type="date", nullable=false)
     */
    private $fechaReserva;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_reserva", type="boolean", nullable=false)
     */
    private $estadoReserva;

    /**
     * @var \Cliente
     *
     * @ORM\ManyToOne(targetEntity="Cliente")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cli_id", referencedColumnName="id")
     * })
     */
    private $cli;

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
     * Set fechaReserva
     *
     * @param \DateTime $fechaReserva
     * @return Reserva
     */
    public function setFechaReserva($fechaReserva)
    {
        $this->fechaReserva = $fechaReserva;

        return $this;
    }

    /**
     * Get fechaReserva
     *
     * @return \DateTime 
     */
    public function getFechaReserva()
    {
        return $this->fechaReserva;
    }

    /**
     * Set estadoReserva
     *
     * @param boolean $estadoReserva
     * @return Reserva
     */
    public function setEstadoReserva($estadoReserva)
    {
        $this->estadoReserva = $estadoReserva;

        return $this;
    }

    /**
     * Get estadoReserva
     *
     * @return boolean 
     */
    public function getEstadoReserva()
    {
        return $this->estadoReserva;
    }

    /**
     * Set cli
     *
     * @param \casamunoz\empresaBundle\Entity\Cliente $cli
     * @return Reserva
     */
    public function setCli(\casamunoz\empresaBundle\Entity\Cliente $cli = null)
    {
        $this->cli = $cli;

        return $this;
    }

    /**
     * Get cli
     *
     * @return \casamunoz\empresaBundle\Entity\Cliente 
     */
    public function getCli()
    {
        return $this->cli;
    }

    /**
     * Set jor
     *
     * @param \casamunoz\empresaBundle\Entity\Jornada $jor
     * @return Reserva
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

    /**
     * Set emp
     *
     * @param \casamunoz\empresaBundle\Entity\Empleado $emp
     * @return Reserva
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
