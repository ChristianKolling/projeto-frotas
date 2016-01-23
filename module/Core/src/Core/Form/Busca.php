<?php

namespace Core\Form;

use Zend\Form\Form as Form;

class Busca extends Form {

    public function __construct($placeholder,$dataAtribute) {
        parent::__construct('busca');
        $this->add(array(
            'name' => 'search',
            'type' => 'Text',
            'options' => array(
                'label' => '',
            ),
            'attributes' => array(
                'class' => 'form-control input-sm',
                'placeholder' => $placeholder,
                'aria-controls' => $dataAtribute
            ),
        ));
    }

}
