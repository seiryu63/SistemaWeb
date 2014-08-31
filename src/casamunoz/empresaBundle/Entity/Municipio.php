<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Municipio
 *
 * @ORM\Table(name="municipio", indexes={@ORM\Index(name="IDX_FE98F5E0814AA86C", columns={"dep_id"})})
 * @ORM\Entity
 */
class Municipio
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="municipio_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre_municipio", type="string", length=30, nullable=false)
     */
    private $nombreMunicipio;

    /**
     * @var \Departamento
     *
     * @ORM\ManyToOne(targetEntity="Departamento")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dep_id", referencedColumnName="id")
     * })
     */
    private $dep;



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
     * Set nombreMunicipio
     *
     * @param string $nombreMunicipio
     * @return Municipio
     */
    public function setNombreMunicipio($nombreMunicipio)
    {
        $this->nombreMunicipio = $nombreMunicipio;

        return $this;
    }

    /**
     * Get nombreMunicipio
     *
     * @return string 
     */
    public function getNombreMunicipio()
    {
        return $this->nombreMunicipio;
    }

    /**
     * Set dep
     *
     * @param \casamunoz\empresaBundle\Entity\Departamento $dep
     * @return Municipio
     */
    public function setDep(\casamunoz\empresaBundle\Entity\Departamento $dep = null)
    {
        $this->dep = $dep;

        return $this;
    }

    /**
     * Get dep
     *
     * @return \casamunoz\empresaBundle\Entity\Departamento 
     */
    public function getDep()
    {
        return $this->dep;
    }
    
    public function __toString() {
         return $this->nombreMunicipio;
    }
  
    
}
