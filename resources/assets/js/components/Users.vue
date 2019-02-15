<template>
    <h1>Hello</h1>
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
            getUsers(){
                axios.get(r('users.index')).then((response) => {
                    this.users = response.data.users;
                });
            }
        },
        mounted() {
            this.getUsers();
       }
    }
</script>