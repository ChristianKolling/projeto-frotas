<?php

namespace Veiculos\Service;

use Core\Service\Service as Service;
use Veiculos\Model\CategoriaVeiculo as Categoria;

class CategoriaVeiculo extends Service {

    public function fetchAll() {
        $query = $this->getObjectManager()
                ->createQueryBuilder()
                ->select('CategoriaVeiculo.id', 'CategoriaVeiculo.descricao')
                ->from('Veiculos\Model\CategoriaVeiculo', 'CategoriaVeiculo');
        return $query->getQuery()->getResult();
    }

    public function salvarCategoriaVeiculo($values) {
        if ($values['id'] != 0) {
            $CategoriaVeiculo = $this->getObjectmanager()->find('Veiculos\Model\CategoriaVeiculo', $values['id']);
        } else {
            $CategoriaVeiculo = new Categoria();
        }
        $CategoriaVeiculo->setDescricao($values['descricao']);
        $this->getObjectManager()->persist($CategoriaVeiculo);
        try {
            $this->getObjectManager()->flush();
        } catch (\Exception $ex) {
            throw new \Exception('Erro ao cadastrar categoria');
        }
    }

    public function excluirCategoriaVeiculo($id) {
        
    }

    public function popular($id, $form) {
        $categoriaVeiculo = $this->getObjectManager()->find('Veiculos\Model\CategoriaVeiculo', $id);
        $form->get('id')->setValue($categoriaVeiculo->getId());
        $form->get('descricao')->setValue($categoriaVeiculo->getDescricao());
        return $form;
    }

}
