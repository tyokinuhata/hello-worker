require('./bootstrap');

Vue.component('worksTop', require('./works/top.vue'));

const worksTop = new Vue({
    el: '#works-top',
});