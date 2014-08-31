<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * CargoEmpleado
 *
 * @ORM\Table(name="cargo_empleado")
 * @ORM\Entity
 */
class CargoEmpleado
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cargo_empleado_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_cargo", type="string", length=30, nullable=false)
     */
    private $nombreCargo;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_cargo", type="string", length=100, nullable=false)
     */
    private $descripcionCargo;



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
     * Set nombreCargo
     *
     * @param string $nombreCargo
     * @return CargoEmpleado
     */
    public function setNombreCargo($nombreCargo)
    {
        $this->nombreCargo = $nombreCargo;

        return $this;
    }

    /**
     * Get nombreCargo
     *
     * @return string 
     */
    public function getNombreCargo()
    {
        return $this->nombreCargo;
    }

    /**
     * Set descripcionCargo
     *
     * @param string $descripcionCargo
     * @return CargoEmpleado
     */
    public function setDescripcionCargo($descripcionCargo)
    {
        $this->descripcionCargo = $descripcionCargo;

        return $this;
    }

    /**
     * Get descripcionCargo
     *
     * @return string 
     */
    public function getDescripcionCargo()
    {
        return $this->descripcionCargo;
    }
}
