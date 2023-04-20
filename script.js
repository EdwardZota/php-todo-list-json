
const { createApp } = Vue

createApp({
  data() {
    return {
        AllTask:[]
    }
  },
  methods:{
    readTaskList(){
        axios.get('server.php')
        .then(response => {
            this.AllTask = response.data;
        })
    }
  },
  mounted(){
    this.readTaskList();
  }
}).mount('#app')