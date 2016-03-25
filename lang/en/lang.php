<?php

return [
    'plugin' => [
        'name' => 'User Export PDF',
        'description' => 'Export user profile to PDF',
    ],
    'permission' => [
        'tab' => 'Export user profiles to PDF',
        'export' => 'Export to PDF',
    ],
    'list' => [
        'export' => [
            'column' => 'Actions',
            'button' => 'Export',
        ],
    ],
];