require('./bootstrap');

Vue.component('example', require('./pages/Top.vue'));

import VueRouter from 'vue-router';
Vue.use(VueRouter);

import App from './components/App.vue';
Vue.component('app', App);

import Top from './pages/Top.vue';

const routes = [
    {
        path: '/',
        component: Top
    }
];

const app = new Vue({
    el: '#app',
    routes
});
