<?php 
namespace Veiculos\Model;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity
* @ORM\Table(name="cor_veiculo")
*/
class CorVeiculo
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