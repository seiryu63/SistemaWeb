<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", indexes={@ORM\Index(name="IDX_F41C9B25BDD5F5BC", columns={"suc_id"}), @ORM\Index(name="IDX_F41C9B25B304206A", columns={"per_id"}), @ORM\Index(name="IDX_F41C9B25476C47F6", columns={"tip_id"})})
 * @ORM\Entity
 */
class Cliente
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="cliente_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha_primera_visita", type="date", nullable=false)
     */
    private $fechaPrimeraVisita;

    /**
     * @var boolean
     *
     * @ORM\Column(name="diabetico", type="boolean", nullable=false)
     */
    private $diabetico;

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
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="per_id", referencedColumnName="id")
     * })
     */
    private $per;

    /**
     * @var \Tipo
     *
     * @ORM\ManyToOne(targetEntity="Tipo")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="tip_id", referencedColumnName="id")
     * })
     */
    private $tip;



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
     * Set fechaPrimeraVisita
     *
     * @param \DateTime $fechaPrimeraVisita
     * @return Cliente
     */
    public function setFechaPrimeraVisita($fechaPrimeraVisita)
    {
        $this->fechaPrimeraVisita = $fechaPrimeraVisita;

        return $this;
    }

    /**
     * Get fechaPrimeraVisita
     *
     * @return \DateTime 
     */
    public function getFechaPrimeraVisita()
    {
        return $this->fechaPrimeraVisita;
    }

    /**
     * Set diabetico
     *
     * @param boolean $diabetico
     * @return Cliente
     */
    public function setDiabetico($diabetico)
    {
        $this->diabetico = $diabetico;

        return $this;
    }

    /**
     * Get diabetico
     *
     * @return boolean 
     */
    public function getDiabetico()
    {
        return $this->diabetico;
    }

    /**
     * Set suc
     *
     * @param \casamunoz\empresaBundle\Entity\Sucursal $suc
     * @return Cliente
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
     * Set per
     *
     * @param \casamunoz\empresaBundle\Entity\Persona $per
     * @return Cliente
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

    /**
     * Set tip
     *
     * @param \casamunoz\empresaBundle\Entity\Tipo $tip
     * @return Cliente
     */
    public function setTip(\casamunoz\empresaBundle\Entity\Tipo $tip = null)
    {
        $this->tip = $tip;

        return $this;
    }

    /**
     * Get tip
     *
     * @return \casamunoz\empresaBundle\Entity\Tipo 
     */
    public function getTip()
    {
        return $this->tip;
    }
    
    
}
