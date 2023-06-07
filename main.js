const { createApp } = updated()

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            data: '',
            DiscInfo: '',
        }
    },
    methods: {
        ApiCall() {
            axios.get(this.ApiUrl)
                .then((res) => {
                    this.data = res.data;
                })
        },
        showSingleCard(i) {
            const dataIndex = {
                discIndex: i
            }

            axios.get(this.apiUrl, { dataIndex })
                .then((res) => {
                    res.data = this.DiscInfo;
                })
        }
    },
    mounted() {
        this.ApiCall();
    }



}).mount('#app')


