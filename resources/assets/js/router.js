import VueRouter from 'vue-router';
import Home from './components/Home';
import Users from './components/Users';
import User from './components/User';
import Projects from './components/Projects';

export default new VueRouter({
    routes: [
        { path: "/", component: Home },
        { path: "/users", component: Users },
        { path: "/users/:id", component: User },
        { path: "/projects", component: Projects }
    ],
    mod: 'history',
    hashbang: false
});