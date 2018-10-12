<?php

declare(strict_types=1);

require __DIR__.'/vendor/autoload.php';

function entrypoint(array $args) : array
{
    return [
        'body' => [
            'its_working' => true,
        ],
    ];
}
