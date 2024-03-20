const { createApp } = Vue;

createApp({
    data() {
        return {
            discList: [],
        }
    },

    mounted() {

        axios.get('./server.php').then(res => {
            console.log(res.data);

            this.discList = res.data;
        });

    },
}).mount('#app');