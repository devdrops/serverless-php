<?php

declare(strict_types=1);

function entrypoint(array $args) : array
{
    $name = $args['name'] ?? 'stranger';
    $greeting = "Hello $name!";

    return [
        'body' => [
            'foo' => 'bar'
        ]
    ];
}
