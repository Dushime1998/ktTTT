import './bootstrap';
import 'flowbite';
import { createApp } from 'vue';
import { createRouter, createWebHistory } from 'vue-router'

const routes = [
    {
        path: '/resultList',
        name: 'resultList',
        component: ResultList,
    },
    {
        path: '/',
        name: 'home',
        component: Navbar,
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes
})




import App from './App.vue'
import Navbar from './components/Navbar.vue'
import Pdetails from './components/Pdetails.vue'
import ResultList from './components/ResultList.vue'
import Index from './Admin/Index.vue'
import AddProduct from './Admin/AddProduct.vue'
import RequestedProduct from './Admin/RequestedProduct.vue'
import OrderedProduct from './Admin/OrderedProduct.vue'
import Card from './components/Card.vue'


createApp(App).mount("#app")
createApp(Navbar).mount("#navbar")
createApp(Pdetails).mount("#details")
createApp(ResultList).mount('#resultList')
createApp(Index).mount('#AdminIndex')
createApp(AddProduct).mount('#AddProduct')
createApp(RequestedProduct).mount('#RequestedProduct')
createApp(OrderedProduct).mount('#OrderedProduct')
createApp(Card).mount("#card")
