<?php
namespace Frotas\Controller;

use Core\Controller\ActionController;
use Zend\View\Model\ViewModel;

class DashboardController extends ActionController
{
    public function indexAction()
    {   return new ViewModel();
    }
}
