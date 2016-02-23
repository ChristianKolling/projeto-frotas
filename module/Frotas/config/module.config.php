<?php

namespace Frotas;

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route' => '/frotas',
                    'defaults' => array(
                        'controller' => 'Frotas\Controller\Dashboard',
                        'action' => 'index',
                    ),
                ),
            ),
            'frotas' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/frotas',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Frotas\Controller',
                        'controller' => 'Dashboard',
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
                        'child_routes' => array(
                            'wildcard' => array(
                                'type' => 'Wildcard'
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
            
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Frotas\Controller\Dashboard' => 'Frotas\Controller\DashboardController',
        ),
    ),
    'doctrine' => array(
        'driver' => array(
            'application_entities' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(__DIR__ . '/../src/Frotas/Model')
            ),
            'orm_default' => array(
                'drivers' => array(
                    'Frotas\Model' => 'application_entities'
                )
            )
        )
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            'frotas' => __DIR__ . '/../view'
        ),
    ),
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),
);
