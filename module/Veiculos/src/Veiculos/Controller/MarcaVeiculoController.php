<?php

namespace Veiculos\Controller;

use Core\Controller\ActionController;
use Veiculos\Form\MarcaVeiculo as FormMarca;
use Core\Form\Busca as FormBusca;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Veiculos\Model\MarcaVeiculo as Marca;

class MarcaVeiculoController extends ActionController {

    public function indexAction() {
        $formMarca = new FormMarca();
        $formBusca = new FormBusca('Pesquise pela marca');

        return new ViewModel(array(
            'formMarca' => $formMarca,
            'form' => $formBusca
        ));
    }

    public function getMarcasAction() {
        $dados = $this->getService('Veiculos\Service\MarcaVeiculo')->fetchAll();
        return new JsonModel($dados);
    }

    public function novaMarcaAction() {
        $request = $this->getRequest();
        if ($request->isPOst()) {
            $values = $request->getPost();
            $novaMarca = new Marca();
            $novaMarca->setDescricao($values['descricao']);
            $this->getObjectManager()->persist($novaMarca);
            $this->getObjectManager()->flush();
            return true;
        }
    }

}
