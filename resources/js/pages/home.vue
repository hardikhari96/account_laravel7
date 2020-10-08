<template>
    <div>
        <navbar/>
        <router-view></router-view>
    </div>
</template>
<script>
import navbar from '../components/navbar'
import login from '../pages/login'
import VueRouter from 'vue-router'
import register from '../pages/register'
import account from '../pages/account'
import journal from '../pages/journal'

Vue.use(VueRouter)

const routes = [
    { path: '/login', component:login},
    { path: '/register',component:register},
    { path: '/journal', component: journal },
    { path: '/account', component: account }
]


const router = new VueRouter({
    routes, // short for `routes: routes`
     //mode: 'history'
})
export default {
    components:{
        navbar
    },
    router
}
</script>