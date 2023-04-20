<?php

    $taskMenager=[
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

    if(isset($_POST['task'])){
        $taskMenager[] = [
            'testo'=> $_POST['task'],
            'fatto'=> false
        ];
    }

header('Content-Type: application/json');

echo json_encode($taskMenager);