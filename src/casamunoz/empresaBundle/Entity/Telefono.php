<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Telefono
 *
 * @ORM\Table(name="telefono", indexes={@ORM\Index(name="IDX_C1E70A7FB304206A", columns={"per_id"}), @ORM\Index(name="IDX_C1E70A7FBDD5F5BC", columns={"suc_id"})})
 * @ORM\Entity
 */
class Telefono
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="telefono_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="telefono", type="string", length=10, nullable=false)
     */
    private $telefono;

    /**
     * @var string
     *
     * @ORM\Column(name="numero_telefono", type="string", length=10, nullable=false)
     */
    private $numeroTelefono;

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
     * @var \Sucursal
     *
     * @ORM\ManyToOne(targetEntity="Sucursal")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="suc_id", referencedColumnName="id")
     * })
     */
    private $suc;



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
     * Set telefono
     *
     * @param string $telefono
     * @return Telefono
     */
    public function setTelefono($telefono)
    {
        $this->telefono = $telefono;

        return $this;
    }

    /**
     * Get telefono
     *
     * @return string 
     */
    public function getTelefono()
    {
        return $this->telefono;
    }

    /**
     * Set numeroTelefono
     *
     * @param string $numeroTelefono
     * @return Telefono
     */
    public function setNumeroTelefono($numeroTelefono)
    {
        $this->numeroTelefono = $numeroTelefono;

        return $this;
    }

    /**
     * Get numeroTelefono
     *
     * @return string 
     */
    public function getNumeroTelefono()
    {
        return $this->numeroTelefono;
    }

    /**
     * Set per
     *
     * @param \casamunoz\empresaBundle\Entity\Persona $per
     * @return Telefono
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
     * Set suc
     *
     * @param \casamunoz\empresaBundle\Entity\Sucursal $suc
     * @return Telefono
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
}
