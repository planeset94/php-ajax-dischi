const app = new Vue(

    {
        el: '#root',

        data: {

            albums: [],





        },

        mounted() {
            axios
                .get('../dist/PHP_partials/api.php')
                .then(resp => {
                    // console.log(resp.data);
                    this.albums = resp.data;



                }).catch(e => {
                    console.log(e);
                })


        },


    },


);