<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cubiculo
 *
 * @ORM\Table(name="cubiculo")
 * @ORM\Entity
 */
class Cubiculo
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cubiculo_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="numero_cubiculo", type="integer", nullable=false)
     */
    private $numeroCubiculo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="estado_cubiculo", type="boolean", nullable=false)
     */
    private $estadoCubiculo;

    /**
     * @var boolean
     *
     * @ORM\Column(name="cubiculo_disponible", type="boolean", nullable=false)
     */
    private $cubiculoDisponible;



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
     * Set numeroCubiculo
     *
     * @param integer $numeroCubiculo
     * @return Cubiculo
     */
    public function setNumeroCubiculo($numeroCubiculo)
    {
        $this->numeroCubiculo = $numeroCubiculo;

        return $this;
    }

    /**
     * Get numeroCubiculo
     *
     * @return integer 
     */
    public function getNumeroCubiculo()
    {
        return $this->numeroCubiculo;
    }

    /**
     * Set estadoCubiculo
     *
     * @param boolean $estadoCubiculo
     * @return Cubiculo
     */
    public function setEstadoCubiculo($estadoCubiculo)
    {
        $this->estadoCubiculo = $estadoCubiculo;

        return $this;
    }

    /**
     * Get estadoCubiculo
     *
     * @return boolean 
     */
    public function getEstadoCubiculo()
    {
        return $this->estadoCubiculo;
    }

    /**
     * Set cubiculoDisponible
     *
     * @param boolean $cubiculoDisponible
     * @return Cubiculo
     */
    public function setCubiculoDisponible($cubiculoDisponible)
    {
        $this->cubiculoDisponible = $cubiculoDisponible;

        return $this;
    }

    /**
     * Get cubiculoDisponible
     *
     * @return boolean 
     */
    public function getCubiculoDisponible()
    {
        return $this->cubiculoDisponible;
    }
}
