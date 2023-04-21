<?php


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