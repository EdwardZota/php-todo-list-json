<?php

    if(file_exists('taskMenager.json')){
        $dataBase= file_get_contents('taskMenager.json');
        $taskMenager= json_decode($dataBase,true);
    }else{
        $taskMenager=[];
    }

    if(isset($_POST['task']) || isset($_POST['doIt']) || isset($_POST['delete'])){

        if(isset($_POST['task'])){
            $taskMenager[] = [
                'testo'=> $_POST['task'],
                'fatto'=> false
            ];
    
        }
    
        if(isset($_POST['doIt'])){
            $taskMenager[$_POST['doIt']]['fatto'] = !$taskMenager[$_POST['doIt']]['fatto'];
        }
    
        if(isset($_POST['delete'])){
            array_splice($taskMenager,$_POST['delete'],1);
        }
        
        $json_string= json_encode($taskMenager);
        file_put_contents('taskMenager.json',$json_string);
    }


header('Content-Type: application/json');

echo json_encode($taskMenager);