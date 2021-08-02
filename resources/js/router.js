import Vue from 'vue';
import VueRouter from 'vue-router';
import Home from './views/pages/Home';
import Blog from './views/pages/Blog';
import About from './views/pages/About';
import Show from './views/pages/Show';

Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: [
        {
            path: '/',
            component: Home
        },
        {
            path: '/blog',
            component: Blog
        },
        {
            path: '/about',
            component: About
        },
        {
            path: '/blog/:slug',
            name: 'show',
            component: Show
        }
    ]
});

export default router;