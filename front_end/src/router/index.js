
import { createRouter, createWebHistory } from 'vue-router'
import Home from '../components/Home.vue'


const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/login',
      name: 'login',
      // route level code-splitting
      // this generates a separate chunk (About.[hash].js) for this route
      // which is lazy-loaded when the route is visited.
      component: () => import('../components/Login.vue')
    },
    {
      path: '/nav',
      name: 'nav',
      component: () => import('../components/Nav.vue')
    },
    {
      path: '/footer',
      name: 'footer',
      component: () => import('../components/Footer.vue')
    },
    {
        path: '/book',
        name: 'book',
        component: () => import('../components/Bookcard.vue')
      },
    {
      path: '/register',
      name: 'register',
      component: () => import('../components/Register.vue')
    },
    {
      path: '/admin',
      name: 'admin',
      component: () => import('../components/admin.vue')
    },
    {
      path: '/admin2',
      name: 'admin2',
      component: () => import('../components/admin_2.vue')
    },
    
  ]
})

export default router
