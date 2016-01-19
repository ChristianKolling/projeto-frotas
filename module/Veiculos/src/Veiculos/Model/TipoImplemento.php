<?php
/**
 * Created by PhpStorm.
 * User: adriano
 * Date: 18/01/16
 * Time: 21:55
 */

namespace Veiculos\Model;
use Doctrine\ORM\Mapping as ORM;

/**
 * Class TipoImplemento
 * @package Veiculos\Model
 *
 * @ORM\Entity
 * @ORM\Table(name="tipo_complemento")
 */

class TipoImplemento
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
     */
    protected $decricao;

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
    public function getDecricao()
    {
        return $this->decricao;
    }

    /**
     * @param mixed $decricao
     */
    public function setDecricao($decricao)
    {
        $this->decricao = $decricao;
    }


}