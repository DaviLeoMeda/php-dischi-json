const { createApp } = updated()

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            data: ''
        }
    },
    methods: {
        ApiCall() {
            axios.get(this.ApiUrl)
                .then((res) => {
                    this.data = res.data;
                })
        }
    },
    mounted() {
        this.ApiCall();
    }



}).mount('#app')


