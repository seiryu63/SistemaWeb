<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Jornada
 *
 * @ORM\Table(name="jornada")
 * @ORM\Entity
 */
class Jornada
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="jornada_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="jornada", type="string", length=10, nullable=false)
     */
    private $jornada;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion_jornada", type="string", length=100, nullable=true)
     */
    private $descripcionJornada;



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
     * Set jornada
     *
     * @param string $jornada
     * @return Jornada
     */
    public function setJornada($jornada)
    {
        $this->jornada = $jornada;

        return $this;
    }

    /**
     * Get jornada
     *
     * @return string 
     */
    public function getJornada()
    {
        return $this->jornada;
    }

    /**
     * Set descripcionJornada
     *
     * @param string $descripcionJornada
     * @return Jornada
     */
    public function setDescripcionJornada($descripcionJornada)
    {
        $this->descripcionJornada = $descripcionJornada;

        return $this;
    }

    /**
     * Get descripcionJornada
     *
     * @return string 
     */
    public function getDescripcionJornada()
    {
        return $this->descripcionJornada;
    }
}
