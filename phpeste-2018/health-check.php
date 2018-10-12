<?php

declare(strict_types=1);

function status(array $args) : array
{
    return [
        'body' => [
            'timestamp' => time(),
        ],
    ];
}
