<?php

namespace casamunoz\empresaBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Bitacora
 *
 * @ORM\Table(name="bitacora")
 * @ORM\Entity
 */
class Bitacora
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="bitacora_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=15, nullable=true)
     */
    private $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="tabla", type="string", length=60, nullable=true)
     */
    private $tabla;

    /**
     * @var string
     *
     * @ORM\Column(name="operacion", type="string", length=250, nullable=true)
     */
    private $operacion;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fecha", type="date", nullable=true)
     */
    private $fecha;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_anterior", type="string", length=400, nullable=true)
     */
    private $valorAnterior;

    /**
     * @var string
     *
     * @ORM\Column(name="valor_actual", type="string", length=400, nullable=true)
     */
    private $valorActual;



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
     * Set usuario
     *
     * @param string $usuario
     * @return Bitacora
     */
    public function setUsuario($usuario)
    {
        $this->usuario = $usuario;

        return $this;
    }

    /**
     * Get usuario
     *
     * @return string 
     */
    public function getUsuario()
    {
        return $this->usuario;
    }

    /**
     * Set tabla
     *
     * @param string $tabla
     * @return Bitacora
     */
    public function setTabla($tabla)
    {
        $this->tabla = $tabla;

        return $this;
    }

    /**
     * Get tabla
     *
     * @return string 
     */
    public function getTabla()
    {
        return $this->tabla;
    }

    /**
     * Set operacion
     *
     * @param string $operacion
     * @return Bitacora
     */
    public function setOperacion($operacion)
    {
        $this->operacion = $operacion;

        return $this;
    }

    /**
     * Get operacion
     *
     * @return string 
     */
    public function getOperacion()
    {
        return $this->operacion;
    }

    /**
     * Set fecha
     *
     * @param \DateTime $fecha
     * @return Bitacora
     */
    public function setFecha($fecha)
    {
        $this->fecha = $fecha;

        return $this;
    }

    /**
     * Get fecha
     *
     * @return \DateTime 
     */
    public function getFecha()
    {
        return $this->fecha;
    }

    /**
     * Set valorAnterior
     *
     * @param string $valorAnterior
     * @return Bitacora
     */
    public function setValorAnterior($valorAnterior)
    {
        $this->valorAnterior = $valorAnterior;

        return $this;
    }

    /**
     * Get valorAnterior
     *
     * @return string 
     */
    public function getValorAnterior()
    {
        return $this->valorAnterior;
    }

    /**
     * Set valorActual
     *
     * @param string $valorActual
     * @return Bitacora
     */
    public function setValorActual($valorActual)
    {
        $this->valorActual = $valorActual;

        return $this;
    }

    /**
     * Get valorActual
     *
     * @return string 
     */
    public function getValorActual()
    {
        return $this->valorActual;
    }
}
