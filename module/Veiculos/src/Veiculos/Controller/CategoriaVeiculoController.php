<?php

namespace Veiculos\Controller;

use Core\Controller\ActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Core\Form\Busca as BuscaForm;
use Veiculos\Form\CategoriaVeiculo as CategoriaVeiculoForm;

class CategoriaVeiculoController extends ActionController {

    public function indexAction() {
        $buscaForm = new BuscaForm('Pesquise pela Categoria', 'categoria-veiculo', 'categoria-veiculo');
        $formVeiculo = new CategoriaVeiculoForm();
        return new ViewModel(array(
            'form' => $buscaForm,
            'formVeiculo' => $formVeiculo
        ));
    }

    public function getCategoriasAction() {
        $dados = $this->getService('Veiculos\Service\CategoriaVeiculo')->fetchAll();
        return new JsonModel($dados);
    }

    public function novaCategoriaAction() {
        $form = new CategoriaVeiculoForm();
        $request = $this->getRequest();
        if ($request->isPOst()) {
            $values = $request->getPost();
            try {
                $this->getService('Veiculos\Service\CategoriaVeiculo')->salvarCategoriaVeiculo($values);
                $this->flashMessenger()->addSuccessMessage('Categoria salva com sucesso.');
            } catch (Exception $ex) {
                $this->flashMessenger()->addWarningMessage('Erro ao salvar categoria');
            }
            $this->redirect()->toUrl('/veiculos/categoria-veiculo/index');
        }
        return new ViewModel(array(
            'form' => $form
        ));
    }

    public function removerCategoriaAction() {
        
    }

    public function editarCategoriaACtion() {
        $form = new CategoriaVeiculoForm();
        $id = (int) $this->params()->fromRoute('id', 0);
        if ($id > 0) {
            $form = $this->getService('Veiculos\Service\CategoriaVeiculo')->popular($id, $form);
        }
        $request = $this->getRequest();
        if ($request->isPOst()) {
            $values = $request->getPost();
            try {
                $this->getService('Veiculos\Service\CategoriaVeiculo')->salvarCategoriaVeiculo($values);
                $this->flashMessenger()->addSuccessMessage('Categoria alterada com sucesso.');
            } catch (Exception $ex) {
                $this->flashMessenger()->addWarningMessage('Erro ao alterar categoria');
            }
            $this->redirect()->toUrl('/veiculos/categoria-veiculo/index');
        }
        return new ViewModel(array(
            'form' => $form
        ));
    }

}
