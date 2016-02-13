<?php

namespace Veiculos\Form;

use Zend\Form\Form as Form;

class CategoriaVeiculo extends Form {

    public function __construct() {
        parent::__construct('categoria-veiculo');
        $this->setAttribute('id', 'categoria-veiculo');

        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));

        $this->add(array(
            'name' => 'descricao',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descrição',
            ),
            'attributes' => array(
                'id' => 'descricao-categoria',
                'class' => 'form-control input-lg',
                'placeholder' => 'Categoria: Passeio',
            ),
        ));
    }

}
