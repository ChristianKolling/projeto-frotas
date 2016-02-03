<?php

namespace Veiculos\Controller;

use Core\Controller\ActionController;
use Veiculos\Form\ModeloVeiculo as FormModelo;
use Core\Form\Busca as FormBusca;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Veiculos\Model\ModeloVeiculo as ModelModeloVeiculo;

class ModeloVeiculoController extends ActionController {

    public function indexAction() {
        $formModelo = new FormModelo($this->getObjectManager());
        $formBusca = new FormBusca('Pesquise por um veículo');

        return new ViewModel(array(
            'formModelo' => $formModelo,
            'form' => $formBusca
        ));
    }

    public function getModelosAction() {
        $dados = $this->getService('Veiculos\Service\ModeloVeiculo')->fetchAll();
        return new JsonModel($dados);
    }

    public function novoModeloAction() {
        $request = $this->getRequest();
        if ($request->isPOst()) {
            $values = $request->getPost();

            $novoModeloVeiculo = new ModelModeloVeiculo();
            $novoModeloVeiculo->setDescricao($values['descricao']);
            $novoModeloVeiculo->setCategoria($this->getObjectManager()->find('Veiculos\Model\CategoriaVeiculo',$values['categoria']));
            $novoModeloVeiculo->setMarca($this->getObjectManager()->find('Veiculos\Model\MarcaVeiculo',$values['marca']));
            $this->getObjectManager()->persist($novoModeloVeiculo);
            $this->getObjectManager()->flush();

            return true;
        }
    }

}
