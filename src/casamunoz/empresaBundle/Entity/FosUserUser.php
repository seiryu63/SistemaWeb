<?php

namespace casamunoz\empresaBundle\Entity;
use Symfony\Component\Security\Core\User\UserInterface;
use Doctrine\ORM\Mapping as ORM;

/**
 * FosUserUser
 *
 * @ORM\Table(name="fos_user_user", uniqueConstraints={@ORM\UniqueConstraint(name="fos_user_user_pk", columns={"id"})}, indexes={@ORM\Index(name="IDX_C560D761890253C7", columns={"id_per"}), @ORM\Index(name="IDX_C560D76190F1D76D", columns={"id_rol"})})
 * @ORM\Entity
 */
class FosUserUser implements UserInterface
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="SEQUENCE")
     * @ORM\SequenceGenerator(sequenceName="fos_user_user_id_seq", allocationSize=1, initialValue=1)
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=255, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255, nullable=false)
     */
    private $password;

    /**
     * @var \Persona
     *
     * @ORM\ManyToOne(targetEntity="Persona")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_per", referencedColumnName="id")
     * })
     */
    private $per;
    

    /**
     * @var \Rol
     *
     * @ORM\ManyToOne(targetEntity="Rol")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_rol", referencedColumnName="id")
     * })
     */
    private $rol;



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
     * Set username
     *
     * @param string $username
     * @return FosUserUser
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return FosUserUser
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
     * Set idPersona
     *
     * @param \casamunoz\empresaBundle\Entity\Persona $per
     * @return FosUserUser
     */
    public function setPer(\casamunoz\empresaBundle\Entity\Persona $per = null)
    {
        $this->per = $per;

        return $this;
    }

    /**
     * Get idPersona
     *
     * @return \casamunoz\empresaBundle\Entity\Persona 
     */
    public function getPer()
    {
        return $this->per;
    }

    /**
     * Set idRol
     *
     * @param \casamunoz\empresaBundle\Entity\Rol $rol
     * @return FosUserUser
     */
    public function setRol(\casamunoz\empresaBundle\Entity\Rol $rol = null)
    {
        $this->rol = $rol;

        return $this;
    }

    /**
     * Get idRol
     *
     * @return \casamunoz\empresaBundle\Entity\Rol 
     */
    public function getRol()
    {
        return $this->rol;
    }

    public function eraseCredentials() {
        
    }

    public function getRoles() {
        
    }

    public function getSalt() {
        
    }

}