window.Vue = require('vue');
window.axios = require('axios')

import Router from 'vue-router';
import VueAxios from 'vue-axios';
import Axios from 'axios';

Vue.use(Router,VueAxios,Axios);

import App from './components/App.vue';
import Home from './components/Home.vue';

const routes = [
    {
    path: '/',
    name: 'home',
    component: Home
    }
]

const router = new Router({ mode: 'history', routes: routes });
new Vue(Vue.util.extend({ router }, App)).$mount("#app");
