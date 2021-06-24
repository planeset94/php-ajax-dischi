const app = new Vue(

    {
        el: '#root',

        data: {

            albums: [],

            generi: [],

            user_option: '',

        },
        methods: {

            cambio_genere() {
                // console.log(this.user_option);
                this.albums.forEach(el => {
                    if (this.user_option === 'All') {
                        el.visible = true;
                    } else if (el.genre.includes(this.user_option)) {
                        el.visible = true;
                    } else {
                        el.visible = false;

                    }
                })
            },


        },

        mounted() {
            axios
                .get('../dist/PHP_partials/api.php')
                .then(resp => {
                    // console.log(resp.data);
                    this.albums = resp.data;

                    //Codice per determinare i generi musicali
                    // this.albums.forEach(el => {
                    //     if (!this.generi.includes(el.genre)) {
                    //         this.generi.push(el.genre)
                    //     }
                    // })


                    // Aggiungo ad ogni elemento una chiave "visible" impostata su true 
                    // (mi servirà per mostrare gli album se il genere è quello giusto )
                    this.albums.forEach(el => {
                        el.visible = true;
                    })

                    axios
                        .get('../dist/PHP_partials/genre.php')
                        .then(resp => {
                            // console.log(resp.data)
                            this.generi = resp.data;

                        })


                })



                .catch(e => {
                    console.log(e);
                })


        },


    },


);