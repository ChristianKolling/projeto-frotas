<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 18/01/16
 * Time: 21:34
 */

namespace Veiculos\Model;

use Doctrine\ORM\Mapping as ORM;

/**
 * Class TipoCombustivel
 * @package Veiculos\Model
 *
 * @ORM\Entity
 * @ORM\Table(name="tipo_combustivel")
 */
class TipoCombustivel
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
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param mixed $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

}