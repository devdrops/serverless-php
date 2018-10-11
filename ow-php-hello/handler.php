<?php

declare(strict_types=1);

function hello(array $args) : array
{
    $name = $args['name'] ?? 'stranger';
    $greeting = "Hello $name!";

    return [
        'body' => [
            'greeting' => $greeting,
        ]
    ];
}

