<?php

namespace Veiculos\Form;

use Zend\Form\Form as Form;

class MarcaVeiculo extends Form {

    public function __construct() {
        parent::__construct('marca-veiculo');
        $this->setAttribute('id', 'marca-veiculo');

        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));

        $this->add(array(
            'name' => 'descricao',
            'type' => 'Text',
            'options' => array(
                'label' => 'Marca do Veículo',
            ),
            'attributes' => array(
                'id' => 'descricao-marca',
                'class' => 'form-control input-lg',
                'placeholder' => 'FIAT',
            ),
        ));
    }

}
