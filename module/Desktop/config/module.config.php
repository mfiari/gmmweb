<?php

return array(
    'controllers' => array(
        'invokables' => array(
            'Desktop\Controller\Desktop' => 'Desktop\Controller\DesktopController',
        ),
    ),
	'router' => array(
        'routes' => array(
            'desktop' => array(
                'type' => 'Literal',
                'options' => array(
                    'route' => '/desktop',
                    'defaults' => array(
                        'controller' => 'Desktop\Controller\Desktop',
                        'action' => 'index',
                    ),
                ),
            ),
        ),
    ),
    'view_manager' => array(
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
);

