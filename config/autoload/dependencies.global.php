<?php

return [
    // Provides application-wide services.
    'dependencies' => [
        'services' => [

        ],
        'shared' => [
            'app' => \Phalcon\Expressive\Application::class,
            'request' => \Phalcon\Http\Request::class,
            'response' => \Phalcon\Http\Response::class,
            'url' => \Phalcon\Mvc\Url::class,
            'modelsManager' => \Phalcon\Mvc\Model\Manager::class,
            'modelsMetadata' => \Phalcon\Mvc\Model\MetaData\Memory::class,
            'cookies' => \Phalcon\Http\Response\Cookies::class,
            'filter' => \Phalcon\Filter::class,
            'escaper' => \Phalcon\Escaper::class,
            'security' => \Phalcon\Security::class,
            'crypt' => \Phalcon\Crypt::class,
            'annotations' => \Phalcon\Annotations\Adapter\Memory::class,
            'flash' => \Phalcon\Flash\Direct::class,
            'flashSession' => \Phalcon\Flash\Session::class,
            'tag' => \Phalcon\Tag::class,
            'session' => function(){
                $session = new Phalcon\Session\Adapter\Files();
                $session->start();
                return $session;
            },
            'sessionBag' => \Phalcon\Session\Bag::class,
            'eventsManager' => \Phalcon\Events\Manager::class,
            'transactionManager' => \Phalcon\Mvc\Model\Transaction\Manager::class,

        ],
    ],
];
