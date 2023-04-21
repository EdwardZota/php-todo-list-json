
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
      this.axiosPostRequest(data);

      this.taskItem = '';
        
    },
    doItTask(i){
      const data ={
        doIt: i
      }
      this.axiosPostRequest(data);

    },
    deleteTask(i){
      const data ={
        delete: i
      }

      this.axiosPostRequest(data);
    },
    axiosPostRequest(data){
      axios.post('server.php',data,
      {
        headers: { 'Content-Type': 'multipart/form-data'}
      }
      ).then(response =>{
        this.allTask = response.data;
      })
    }
  },
  mounted(){
    this.readTaskList();
  }
}).mount('#app')