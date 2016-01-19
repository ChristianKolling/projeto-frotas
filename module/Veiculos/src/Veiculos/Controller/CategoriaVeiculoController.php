<?php

namespace Veiculos\Controller;

use Core\Controller\ActionController;
use Zend\View\Model\ViewModel;
use Core\Form\Busca as BuscaForm;

class CategoriaVeiculoController extends ActionController
{
    public function indexAction() {
        $buscaForm = new BuscaForm('Pesquise pela Categoria');
        return new ViewModel(array('form' => $buscaForm));
    }
}