import Vue from 'vue'
import VueRouter from 'vue-router'

import Home from './pages/Home'
import About from './pages/About'
import Services from './pages/Services'
import Products from './pages/Products'
import Blog from './pages/Blog'
import Contacts from './pages/Contacts'

Vue.use(VueRouter)

const routes = [
  {
    path: '/',
    component: Home,
  },
  {
    path: '/about',
    component: About,
  },
  {
    path: '/services',
    component: Services,
  },
  {
    path: '/products',
    component: Products,
  },
  {
    path: '/blog',
    component: Blog,
  },
  {
    path: '/contacts',
    component: Contacts,
  },
]

export default new VueRouter({
  mode: 'history',
  routes
})