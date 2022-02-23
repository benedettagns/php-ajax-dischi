new Vue ({
    el:"#app",
    data:{
        dischi: []
    },

    mounted() {
        axios.get('http://localhost:8888/php-ajax-dischi/dischi-api.php').then((response) => {
          this.dischi= response.data
        })
    }
});