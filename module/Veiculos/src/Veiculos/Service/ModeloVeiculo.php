<?php

namespace Veiculos\Service;

use Core\Service\Service as Service;

class ModeloVeiculo extends Service {

    public function fetchAll() {
        $query = $this->getObjectManager()
                ->createQueryBuilder()
                ->select('ModeloVeiculo.id', 'ModeloVeiculo.descricao', 'MarcaVeiculo.descricao as marca','Categoria.descricao as categoria')
                ->from('Veiculos\Model\ModeloVeiculo', 'ModeloVeiculo')
                ->join('ModeloVeiculo.marca','MarcaVeiculo')
                ->join('ModeloVeiculo.categoria','Categoria');
        return $query->getQuery()->getResult();
    }

    public function salvarModeloVeiculo($values) {
        
    }

    public function editarModeloVeiculo($id) {
        
    }

    public function excluirModeloVeiculo($id) {
        
    }

}
