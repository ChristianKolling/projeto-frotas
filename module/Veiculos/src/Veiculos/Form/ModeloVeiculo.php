<?php

namespace Veiculos\Form;

use Zend\Form\Form as Form;

class ModeloVeiculo extends Form {

    public function __construct($em) {
        parent::__construct('modelo-veiculo');
        $this->setAttribute('id', 'modelo-veiculo');

        $this->add(array(
            'name' => 'id',
            'type' => 'Hidden',
        ));

        $this->add(array(
            'name' => 'descricao',
            'type' => 'Text',
            'options' => array(
                'label' => 'Descrição Modelo',
            ),
            'attributes' => array(
                'id' => 'descricao-modelo',
                'class' => 'form-control input-lg',
                'placeholder' => 'GOL',
            ),
        ));

        $this->add(array(
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'categoria',
            'options' => array(
                'label' => 'Categoria do Veículo',
                'object_manager' => $em,
                'target_class' => 'Veiculos\Model\CategoriaVeiculo',
                'property' => 'descricao',
                'empty_option' => '--- Selecione ---'
            ),
            'attributes' => array(
                'id' => 'categoria-veiculo',
                'class' => 'form-control input-lg',
            ),
        ));
        
        $this->add(array(
            'type' => 'DoctrineModule\Form\Element\ObjectSelect',
            'name' => 'marca',
            'options' => array(
                'label' => 'Marca do Veículo',
                'object_manager' => $em,
                'target_class' => 'Veiculos\Model\MarcaVeiculo',
                'property' => 'descricao',
                'empty_option' => '--- Selecione ---'
            ),
            'attributes' => array(
                'id' => 'marca-veiculo',
                'class' => 'form-control input-lg',
            ),
        ));
    }

}
