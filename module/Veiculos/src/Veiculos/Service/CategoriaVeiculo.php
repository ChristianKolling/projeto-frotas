<?php
namespace Veiculos\Service;

use Core\Service\Service as Service;

class CategoriaVeiculo extends Service
{
	public function fetchAll(){
		$query = $this->getObjectManager()
				->createQueryBuilder()
				->select('CategoriaVeiculo.id','CategoriaVeiculo.descricao')
				->from('Veiculos\Model\CategoriaVeiculo','CategoriaVeiculo');
		return $query->getQuery()->getResult();
	}

	public function salvaCategoriaVeiculo($values){
	}

	public function editarCategoriaVeiculo($id){

	}

	public function excluirCategoriaVeiculo($id){

	}
}