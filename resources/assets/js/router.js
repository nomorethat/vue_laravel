import VueRouter from 'vue-router';
import Users from './components/Users';
import Projects from './components/Projects';

export default new VueRouter({
    routes: [
        { path: "/users", component: Users },
        { path: "/projects", component: Projects }
    ],
    mod: 'history',
    hashbang: false
});