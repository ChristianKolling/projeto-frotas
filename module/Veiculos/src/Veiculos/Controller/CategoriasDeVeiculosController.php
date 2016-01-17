<?php

namespace Veiculos\Controller;

use Core\Controller\ActionController;
use Zend\View\Helper\ViewModel;

class CategoriasDeVeiculosController extends ActionController
{
    public function indexAction() 
    {
        return new ViewModel();
    }
}

