<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Task Menager</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>
<body class=" bg-info ">

    <div id="app" class=" vh-100">
        <div class="container w-25 h-75 pt-5 d-flex flex-column justify-content-between bg-primary rounded-4 mt-5 p-5">
            
            <h1 class="text-white">Task Menager</h1>
            <ul class="list-group">
                <li class="list-group-item" v-for="task in allTask" ><p :class="task.fatto?'text-decoration-line-through':''">{{task.testo}}</p></li>
            </ul>
            <div class="align-items-end ">
                <input type="text" class="ms-3" v-model="taskItem">
                <button class="btn btn-light ms-3" @click="addTask">Aggiungi Task</button>
            </div>

        </div>
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src='script.js'></script>
</body>
</html>