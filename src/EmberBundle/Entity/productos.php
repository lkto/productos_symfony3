<?php

namespace EmberBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;


/**
 * productos
 *
 * @ORM\Table(name="productos")
 * @ORM\Entity(repositoryClass="EmberBundle\Repository\productosRepository")
 */
class productos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="codigo", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     *@Assert\Length(min = 4)
     *@Assert\Length(max = 10)
     * @Assert\Regex(
     *     pattern="/\W/",
     *     match=false,
     *     message="No puede contener carácteres especiales ni espacios"
     * )

     */
    private $codigo;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=255, unique=true)
     * @Assert\NotBlank()
     *@Assert\Length(min = 4)

     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=255)
     * @Assert\NotBlank()
     */
    private $descripcion;




    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="marca", inversedBy="productos")
     * @ORM\JoinColumn(name="marca_id", referencedColumnName="id")
     * @Assert\NotBlank()

     */
    private $marcaId;

    /**
     * @var int
     *
     * @ORM\ManyToOne(targetEntity="categoria", inversedBy="productos")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     * @Assert\NotBlank()
     */
    
    private $categoriaId;


     


    /**
     * @var int
     *
     * @ORM\Column(name="precio", type="integer")
     * @Assert\NotBlank()
     */
    
    private $precio;



    /**
     * Get id
     *
     * @return int
     */

    public function getId()
    {
        return $this->id;
    }

    /**
     * Set codigo
     *
     * @param string $codigo
     *
     * @return productos
     */
    public function setCodigo($codigo)
    {
        $this->codigo = $codigo;

        return $this;
    }

    /**
     * Get codigo
     *
     * @return string
     */
    public function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return productos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return productos
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set marcaId
     *
     * @param \EmberBundle\Entity\marca $marcaId
     *
     * @return productos
     */
    public function setMarcaId(\EmberBundle\Entity\marca $marcaId = null)
    {
        $this->marcaId = $marcaId;

        return $this;
    }

    /**
     * Get marcaId
     *
     * @return \EmberBundle\Entity\marca
     */
    public function getMarcaId()
    {
        return $this->marcaId;
    }

    /**
     * Set categoriaId
     *
     * @param \EmberBundle\Entity\categoria $categoriaId
     *
     * @return productos
     */
    public function setCategoriaId(\EmberBundle\Entity\categoria $categoriaId = null)
    {
        $this->categoriaId = $categoriaId;

        return $this;
    }

    /**
     * Get categoriaId
     *
     * @return \EmberBundle\Entity\categoria
     */
    public function getCategoriaId()
    {
        return $this->categoriaId;
    }

    /**
     * Set precio
     *
     * @param integer $precio
     *
     * @return productos
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get precio
     *
     * @return int
     */
    public function getPrecio()
    {
        return $this->precio;
    }
}

