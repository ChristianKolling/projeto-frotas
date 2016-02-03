<?php

namespace Veiculos\Controller;

use Core\Controller\ActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Core\Form\Busca as BuscaForm;
use Veiculos\Form\CategoriaVeiculo as CategoriaVeiculoForm;
use Veiculos\Model\CategoriaVeiculo as Categoria;

class CategoriaVeiculoController extends ActionController
{
    public function indexAction() {
        $buscaForm = new BuscaForm('Pesquise pela Categoria','table-categoria-veiculo');
        $formVeiculo = new CategoriaVeiculoForm();

        return new ViewModel(array(
        	'form' => $buscaForm,
        	'formVeiculo' => $formVeiculo
        ));
    }

    public function getCategoriasAction(){
    	$dados = $this->getService('Veiculos\Service\CategoriaVeiculo')->fetchAll();
        return new JsonModel($dados);
    }

    public function novaCategoriaAction(){
    	$request = $this->getRequest();
    	if($request->isPOst()){
    		$values = $request->getPost();

    		$novaCategoriaVeiculo = new Categoria();
    		$novaCategoriaVeiculo->setDescricao($values['descricao']);
    		$this->getObjectManager()->persist($novaCategoriaVeiculo);
    		$this->getObjectManager()->flush();

    		return true;
    	}
    }

    public function removerCategoriaAction(){

    }

    public function editarCategoriaACtion(){

    }
}