<template>
    <div>
        <h1>Hello</h1>
        <ul>
            <li v-for="user in users">{{ user }}</li>
        </ul>
    </div>
</template>

<script>
    import axios from 'axios';
    import r from '../route';

    export default {
        data(){
            return{
                users: []
            }
        },
        methods: {
            getUser(){
                axios.get(r('projects.show')).then((response) => {
                    this.users = response.data.users;
                });

            }
        },
        mounted() {
            this.getUser();
        }
    }
</script>

<style scoped>

</style>