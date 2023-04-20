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

    $dataBase= file_get_contents('taskMenager.json');
    $taskMenager= json_decode($dataBase,true);

    if(isset($_POST['task'])){
        $taskMenager[] = [
            'testo'=> $_POST['task'],
            'fatto'=> false
        ];

        $json_string= json_encode($taskMenager);
        file_put_contents('taskMenager.json',$json_string);
    }




header('Content-Type: application/json');

echo json_encode($taskMenager);