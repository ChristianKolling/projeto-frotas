<?php

namespace Veiculos;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/veiculos',
                    'defaults' => array(
                        'controller' => 'Veiculos\Controller\Index',
                        'action' => 'index',
                    ),
                ),
            ),
            'veiculos' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/veiculos',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Veiculos\Controller',
                        'controller' => 'Index',
                        'action' => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type' => 'Segment',
                        'options' => array(
                            'route' => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action' => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'invokables' => array(
            'Veiculos\Service\CategoriaDeVeiculo' => 'Veiculos\Service\CategoriaDeVeiculo'
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Veiculos\Controller\Index' => 'Veiculos\Controller\IndexController',
            'Veiculos\Controller\CategoriasDeVeiculos' => 'Veiculos\Controller\CategoriasDeVeiculosController'
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'application_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Veiculos/Model')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Veiculos\Model' => 'application_entities'
                )
            )
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'veiculos' => __DIR__ . '/../view'
        ),
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
