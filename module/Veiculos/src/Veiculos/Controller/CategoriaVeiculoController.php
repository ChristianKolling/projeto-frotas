<?php

namespace Veiculos\Controller;

use Core\Controller\ActionController;
use Zend\View\Model\ViewModel;

class CategoriaVeiculoController extends ActionController
{
    public function indexAction() {
        return new ViewModel();
    }
}