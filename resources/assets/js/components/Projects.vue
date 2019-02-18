<template>
    <table cellpadding="0" cellspacing="0" border="1">
        <tr>
            <td>Проект</td>
        </tr>
        <tr v-for="project in projects">
            <td>{{ project.project }}</td>
        </tr>
    </table>
</template>

<script>
    import axios from 'axios';
    import r from '../route';

    export default {
        data(){
            return{
                projects: []
            }
        },
        methods: {
            getProjects(){
                axios.get(r('projects.index')).then((response) => {
                    this.projects = response.data.projects;
                });

            }
        },
        mounted() {
            this.getProjects();
        }
    }
</script>

<style>
    table{
        margin: 30px auto 0;
    }
</style>