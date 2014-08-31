<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * HistorialVisita
 *
 * @ORM\Table(name="historial_visita", indexes={@ORM\Index(name="IDX_B06EEC20BC4EE2B0", columns={"cli_id"}), @ORM\Index(name="IDX_B06EEC2021CD2AF8", columns={"his_id"})})
 * @ORM\Entity
 */
class HistorialVisita
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="historial_visita_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

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
     * @var \Historial
     *
     * @ORM\ManyToOne(targetEntity="Historial")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="his_id", referencedColumnName="id")
     * })
     */
    private $his;



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
     * Set cli
     *
     * @param \casamunoz\empresaBundle\Entity\Cliente $cli
     * @return HistorialVisita
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
     * Set his
     *
     * @param \casamunoz\empresaBundle\Entity\Historial $his
     * @return HistorialVisita
     */
    public function setHis(\casamunoz\empresaBundle\Entity\Historial $his = null)
    {
        $this->his = $his;

        return $this;
    }

    /**
     * Get his
     *
     * @return \casamunoz\empresaBundle\Entity\Historial 
     */
    public function getHis()
    {
        return $this->his;
    }
}
