<?php

namespace Veiculos\Service;

use Core\Service\Service as Service;

class MarcaVeiculo extends Service {

    public function fetchAll() {
        $query = $this->getObjectManager()
                ->createQueryBuilder()
                ->select('MarcaVeiculo.id', 'MarcaVeiculo.descricao')
                ->from('Veiculos\Model\MarcaVeiculo', 'MarcaVeiculo');
        return $query->getQuery()->getResult();
    }

    public function salvarMarcaVeiculo($values) {
        
    }

    public function editarMarcaVeiculo($id) {
        
    }

    public function excluirMarcaVeiculo($id) {
        
    }

}
