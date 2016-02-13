<?php

namespace Core\Form;

use Zend\Form\Form as Form;

class Busca extends Form {

    public function __construct($placeholder, $id, $classe) {
        parent::__construct('busca');
        $this->add(array(
            'name' => 'search',
            'type' => 'Text',
            'options' => array(
                'label' => '',
            ),
            'attributes' => array(
                'class' => 'form-control input-sm '."$classe",
                'placeholder' => $placeholder,
                'id' => $id
            ),
        ));
    }

}
