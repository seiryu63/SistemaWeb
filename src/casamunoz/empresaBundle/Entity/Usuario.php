<?php

namespace casamunoz\empresaBundle\Entity;

use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="IDX_2265B05D4BAB96C", columns={"rol_id"}), @ORM\Index(name="IDX_2265B05DB304206A", columns={"per_id"})})
 * @ORM\Entity
 */
class Usuario implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="usuario_id_seq", allocationSize=1, initialValue=1)
     */
    protected $id;

    /**
     * @var string
     *
     * @ORM\Column(name="usuario", type="string", length=15, nullable=false)
     */
    protected $usuario;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=15, nullable=false)
     */
    protected $password;

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=75, nullable=true)
     */
    protected $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=true)
     */
    protected $habilitado;

    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="rol_id", referencedColumnName="id")
     * })
     */
    protected $rol;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="per_id", referencedColumnName="id")
     * })
     */
    private $per;

    public function __construct()
    {
        $this->rol = new \Doctrine\Common\Collections\ArrayCollection();
    }


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
     * @return Usuario
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
     * Set password
     *
     * @param string $password
     * @return Usuario
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set email
     *
     * @param string $email
     * @return Usuario
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string 
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set habilitado
     *
     * @param boolean $habilitado
     * @return Usuario
     */
    public function setHabilitado($habilitado)
    {
        $this->habilitado = $habilitado;

        return $this;
    }

    /**
     * Get habilitado
     *
     * @return boolean 
     */
    public function getHabilitado()
    {
        return $this->habilitado;
    }

    /**
     * Set rol
     *
     * @param \casamunoz\empresaBundle\Entity\Rol $rol
     * @return Usuario
     */
    public function setRol(\casamunoz\empresaBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get rol
     *
     * @return \casamunoz\empresaBundle\Entity\Rol 
     */
    public function getRol()
    {
        return $this->rol;
    }

    /**
     * Set per
     *
     * @param \casamunoz\empresaBundle\Entity\Persona $per
     * @return Usuario
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
     * Add rol
     *
     * @param casamunoz\empresaBundle\Entity\Rol $Rol
     */
    public function addRole(\casamunoz\empresaBundle\Entity\Rol $Rol)
    {
        $this->rol[] = $Rol;
    }
 
    
 /**
     * Get roles
     *
     * @return Doctrine\Common\Collections\Collection
     */
    public function getRoles()
    {
        return $this->rol->toArray(); //IMPORTANTE: el mecanismo de seguridad de Sf2 requiere ésto como un array
    }
    
    /**
     * Compares this user to another to determine if they are the same.
     *
     * @param UserInterface $user The user
     * @return boolean True if equal, false othwerwise.
     */
    public function equals(UserInterface $user) {
        return md5($this->getUsuario()) == md5($user->getUsuario());
 
    }
 
    /**
     * Erases the user credentials.
     */
    
    public function eraseCredentials() {
        
    }

    public function getSalt() {
        
    }

    public function getUsername() {
        
    }

}
