import axios from 'axios';
window.axios = axios;
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';


import Vue from 'vue';
import VueRouter from 'vue-router';
import routes from './router';
import 'boxicons';
import './custom';


Vue.use(VueRouter);
Vue.component('navbar', require('./components/Navbar.vue').default);
Vue.component('newfooter', require('./components/NewFooter.vue').default);

const app = new Vue({
    el: '#app',
    router: new VueRouter(routes)

});
