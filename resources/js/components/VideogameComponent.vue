<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="d-flex flex-wrap justify-content-between">
                <div class="card" v-for="videogame in videogames" :key="videogame.id">
                    <div class="card-header">
                        <h3>{{videogame.title}}</h3>
                        <h4>{{videogame.subtitle}}</h4>
                    </div>

                    <div class="card-body">
                        <h5>Rating: {{videogame.rating}}</h5>
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
        mounted() {
            axios   .get('/videogames/list')
                    .then(res => (this.videogames = res.data))
                    .catch(error => error.log(error))
        }
    }
</script>
