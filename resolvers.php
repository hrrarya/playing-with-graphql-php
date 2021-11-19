<?php

use Overblog\DataLoader\DataLoader;

return [
    'Person' => [
        'pet' =>  function($root, $args, $context) {
            // return $context['petLoader']->load($root['pet_id']);
            return $context['sql']("SELECT * FROM pets where pet_id={$root['pet_id']}");
        },
    ],
    'Query' => [
        'getPerson' => function($root, $args, $context) {
            return $context['sql']("SELECT * FROM persons");
        },
        'getPet' => function($root, $args, $context) {
            return $context['sql']('SELECT * FROM pets');
        },
    ]
];
