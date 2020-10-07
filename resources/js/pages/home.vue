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
Vue.use(VueRouter)


const Foo = { template: '<div>foo</div>' }
const Bar = { template: '<div>bar</div>' }

const routes = [
    { path: '/login', component:login},
    { path: '/register',component:register},
    { path: '/foo', component: Foo },
    { path: '/bar', component: Bar },
    { path: '/account', component: account }
]


const router = new VueRouter({
    routes, // short for `routes: routes`
     mode: 'history'
})
export default {
    components:{
        navbar
    },
    router
}
</script>