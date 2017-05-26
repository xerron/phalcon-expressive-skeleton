<?php

/**
 * Setup middleware pipeline:
 */

/** @var Phalcon\Expressive\Application $app */

$app->before(
    function(){
        echo "antes ->";
    }
);

$app->after(
    function(){
        echo " -> despues";
    }
);

$app->error(
    function(){
        echo "!!!!error!!!";
    }
);

$app->notFound(
    function(){
        echo "no encontrado";
    }
);

