<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex flex-wrap justify-content-center">
                <div class="card  mx-1" v-for="videogame in videogames" :key="videogame.id">
                    <div class="card-header">
                        <h3>{{videogame.title}}</h3>
                        <h4>{{videogame.subtitle}}</h4>
                    </div>

                    <div class="card-body">
                        <h5>Rating: {{videogame.rating}}</h5>
                        <!-- <a :href="`/videogame/delete/${videogame.id}`" class="btn btn-danger" v-if="authorized">Delete</a> -->
                        <a @click="videogameDelete(videogame.id)" class="btn btn-danger" v-if="authorized">Delete</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                videogames: [],
            }
        },
        props : {
            authorized: String,
        },

        methods: {
            videogameDelete(id) {
                axios   .get(`/videogame/delete/${id}`)
                        .then(result => {
                            const index = this.getIndexById(id);
                            this.videogames - this.videogames.splice(index, 1);
                        })
                        .catch(error => console.error(error))
            },
            getIndexById(id) {
                for (let i = 0; i < this.videogames.length; i++) {
                    const videogame = this.videogames[i];
                    
                    if (videogame.id == id) {
                        return i;
                    }
                }
                return -1;
            }
        },
        mounted() {
            axios   .get('/videogames/list')
                    .then(res => (this.videogames = res.data))
                    .catch(error => console.error(error))
        }
    }
</script>
