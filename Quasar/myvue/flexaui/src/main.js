import Vue from 'vue'
import App from './App.vue'
import VueRouter from 'vue-router'
import Homeroute from './components/Homeroute.vue'
import Aboutroute from './components/Aboutroute.vue'
import Userroute from './components/Userroute.vue'
import store from './store'
Vue.use(VueRouter);

const routes=[
    {path: '/',component:Homeroute},
    {path: '/Aboutroute',component:Aboutroute},
    {path: '/Userroute/:id',component:Userroute}
]
const router = new VueRouter({
    routes
})

Vue.config.productionTip = false
// Vue.filter("Ucase",function(val) {
//   return val.toUpperCase();
// })

new Vue({
    router: router,
    store,
    render: h => h(App)
}).$mount('#app')
