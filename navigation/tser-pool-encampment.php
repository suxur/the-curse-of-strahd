<?php

return [
    'Tser Pool Encampment' => [
        'url'      => 'locations/tser-pool-encampment',
        'children' => [
            'Arrival at the Encampment' => '#arrival',
            'Vistani of the Encampment' => [
                'url'      => '#families',
                'children' => [
                    'The Funars'   => '#funars',
                    'The Vasilles' => '#vasilles',
                    'The Ig\'ars'  => '#igars'

                ]
            ],
            'Quests'                    => [
                'url'      => '#quests',
                'children' => [
                    'Picking Up a Present' => '#present'
                ]
            ]
        ]
    ]
];
