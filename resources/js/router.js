// router/index.js

import { createRouter, createWebHistory } from 'vue-router';
import Home from '../views/Home.vue';
import About from '../views/About.vue';
import AdminIndex from '../Admin/Index.vue';
import AddProduct from '../Admin/AddProduct.vue';
import RequestedProduct from '../Admin/RequestedProduct.vue';
import OrderedProduct from '../Admin/OrderedProduct.vue';

const routes = [
  {
    path: '/',
    name: 'Home',
    component: Home,
  },
  {
    path: '/about',
    name: 'About',
    component: About,
  },
  {
    path: '/admin',
    name: 'AdminIndex',
    component: AdminIndex,
  },
  {
    path: '/admin/add-product',
    name: 'AddProduct',
    component: AddProduct,
  },
  {
    path: '/admin/requested-product',
    name: 'RequestedProduct',
    component: RequestedProduct,
  },
  {
    path: '/admin/ordered-product',
    name: 'OrderedProduct',
    component: OrderedProduct,
  },
];

const router = createRouter({
  history: createWebHistory(),
  routes,
});

export default router;
