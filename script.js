
const { createApp } = Vue

createApp({
  data() {
    return {
        allTask:[],
        taskItem:''
    }
  },
  methods:{
    readTaskList(){
        axios.get('server.php')
        .then(response => {
            this.allTask = response.data;
            
        })
    },
    addTask(){
        const data = {
            task:this.taskItem
        };

        axios.post('server.php',data,
        {
            headers: { 'Content-Type': 'multipart/form-data'}
        }
        ).then(response =>{
            this.allTask = response.data;
            this.taskItem = '';
        })
    },
    doIt(){
        this.allTask.fatto
    }
  },
  mounted(){
    this.readTaskList();
  }
}).mount('#app')