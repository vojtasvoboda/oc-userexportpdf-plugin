<?php

return [
    'plugin' => [
        'name' => 'Felhasználók PDF exportálása',
        'description' => 'Profil adatok exportálása PDF fájlba.',
    ],
    'permission' => [
        'tab' => 'Felhasználók',
        'export' => 'Adatok exportálása PDF fájlba',
    ],
    'list' => [
        'export' => [
            'column' => 'Művelet',
            'button' => 'Exportálás',
        ],
    ],
];
