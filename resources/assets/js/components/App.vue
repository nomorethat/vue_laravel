<template>
    <div>
        <nav>
            <router-link to="/">Главная</router-link>
            <router-link to="/projects">Проекты</router-link>
            <router-link to="/users">Пользователи</router-link>
        </nav>
        <router-view></router-view>
    </div>
</template>

<script>
    export default {
        mounted() {}
    }
</script>

<style scoped>
    nav{
        width:400px;
        margin: 50px auto;
    }
</style>