<?php

namespace casamunoz\empresaBundle\Entity;
use Symfony\Component\Security\Core\Role\RoleInterface;

use Doctrine\ORM\Mapping as ORM;

/**
 * Rol
 *
 * @ORM\Table(name="rol")
 * @ORM\Entity
 */
class Rol implements RoleInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="rol_id_rol_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_rol", type="string", length=25, nullable=false)
     */
    private $nombreRol;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_rol", type="string", length=75, nullable=true)
     */
    private $descripcionRol;



    /**
     * Get idRol
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombreRol
     *
     * @param string $nombreRol
     * @return Rol
     */
    public function setNombreRol($nombreRol)
    {
        $this->nombreRol = $nombreRol;

        return $this;
    }

    /**
     * Get nombreRol
     *
     * @return string 
     */
    public function getNombreRol()
    {
        return $this->nombreRol;
    }

    /**
     * Set descripcionRol
     *
     * @param string $descripcionRol
     * @return Rol
     */
    public function setDescripcionRol($descripcionRol)
    {
        $this->descripcionRol = $descripcionRol;

        return $this;
    }

    /**
     * Get descripcionRol
     *
     * @return string 
     */
    public function getDescripcionRol()
    {
        return $this->descripcionRol;
    }
    
     public function __toString() {
        return $this->nombreRol;
    }

    public function getRole() {
        
    }

}