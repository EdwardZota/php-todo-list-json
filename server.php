<?php

$taskMenager:[
        [
            'testo'=> 'Fare la Spesa',
            'fatto'=> false
        ],
        [
            'testo'=> 'Dare da mangiare al cane',
            'fatto'=> true
        ],
        [
            'testo'=> "Tagliare l'erba del giardino",
            'fatto'=> false
        ],
        [
            'testo'=> 'Fare il riposino pomeridiano',
            'fatto'=> true
        ]
    ];


header('Content-Type: application/json');

echo json_encode($taskMenager);