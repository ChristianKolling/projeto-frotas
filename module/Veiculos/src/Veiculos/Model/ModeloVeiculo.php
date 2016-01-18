<?php
namespace Veiculos\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="modelo_veiculo")
 */
class ModeloVeiculo
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     * 
     */
    protected $id;
    
    /**
     * @ORM\Column(type="string", length=30)
     * 
     */
    protected $descricao;
    
    /**
     * @ORM\OneToOne(targetEntity="MarcaVeiculo")
     * @ORM\JoinColumn(name="marca_id", referencedColumnName="id")
     */
    protected $marca;
            
    /**
     * @ORM\OneToOne(targetEntity="CategoriaVeiculo")
     * @ORM\JoinColumn(name="categoria_id", referencedColumnName="id")
     */
    protected $categoria;
            
    
    function getId() {
        return $this->id;
    }

    function getDescricao() {
        return $this->descricao;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDescricao($descricao) {
        $this->descricao = $descricao;
    }

    function getMarca() {
        return $this->marca;
    }

    function setMarca($marca) {
        $this->marca = $marca;
    }

    function getCategoria() {
        return $this->categoria;
    }

    function setCategoria($categoria) {
        $this->categoria = $categoria;
    }


}