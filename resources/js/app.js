import './bootstrap';

import Vue  from 'vue';
import { createApp } from 'vue'
import App from './app.vue';
import * as VueRouter from 'vue-router'
import axios from 'axios'
import * as VueAxios from 'vue-axios'
import store from './store/index'
//import userbook from './pages/userbook.vue'


// pages

import Home from './pages/home.vue'
import Login from './pages/login.vue'
import Register from './pages/register.vue'
import Dashboard from './pages/Dashboard.vue'
import Admin from './pages/Admin.vue'




const routes = [
    { 
        path: '/',
        component: Home
    },
    { 
        path: '/login',
        component: Login,
        name: 'Login'
    },
    { 
        path: '/register',
        component: Register
    },
    { 
        path: '/dashboard',
        component: Dashboard,
        name: 'Dashboard'
    },
    { 
        path: '/admin',
        component:Admin,
        name: 'Admin'
    }
  ]


  const router = VueRouter.createRouter({
    history: VueRouter.createWebHashHistory(),
    routes,
})

const app = createApp({
    /* root component options */
    el: '#app',
    components: { App }
})

app.component('userbook', require('./pages/userbook.vue').default)


app.use(store)
app.use(router)
app.use(VueAxios, axios)
app.mount('#app')


//system login details
//username:  epiz_32043783!
//password: NYstDEvt8dyC
