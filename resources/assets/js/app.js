require('./bootstrap');

Vue.component('example', require('./pages/Top.vue'));

const app = new Vue({
    el: '#app'
});
