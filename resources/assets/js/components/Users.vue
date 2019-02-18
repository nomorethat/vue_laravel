<template>
    <table cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td>Пользователь</td>
            <td>E-mail</td>
        </tr>
        <tr v-for="user in users">
            <td>{{ user.name }}</td>
            <td>{{ user.email }}</td>
        </tr>
    </table>
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

<style>
    table{
        margin: 30px auto 0;
    }
</style>