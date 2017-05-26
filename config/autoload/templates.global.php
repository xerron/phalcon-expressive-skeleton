<?php

//use Zend\Expressive\Template\TemplateRendererInterface;
//use Zend\Expressive\Twig\TwigEnvironmentFactory;
//use Zend\Expressive\Twig\TwigRendererFactory;

return [
    'dependencies' => [
        'shared' => [
            'view' => \Phalcon\Mvc\View::class
        ],
        'factories' => [
            //Twig_Environment::class => TwigEnvironmentFactory::class,
            //TemplateRendererInterface::class => TwigRendererFactory::class,
        ],
    ],

    'templates' => [
        'extension' => 'html.volt',
    ],

    'volt' => [
        'cache_dir'      => 'data/cache/volt',
        'assets_url'     => '/',
        'assets_version' => null,
        'extensions'     => [
            // extension service names or instances
        ],
        'runtime_loaders' => [
            // runtime loader names or instances
        ],
        'globals' => [
            // Variables to pass to all twig templates
        ],
        // 'timezone' => 'default timezone identifier; e.g. America/Chicago',
    ],
];
