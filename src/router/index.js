import { createRouter, createWebHistory } from 'vue-router'
import InfoPage from '../components/InfoPage.vue'
import HomePage from '../components/HomePage.vue'
import InfoPage_2 from '../components/InfoPage_2.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomePage
    },
    {
      path: '/info',
      name: 'info',
      component: InfoPage
    },
    {
      path: '/info2',
      name: 'info2',
      component: InfoPage_2
    }
  ]
})

export default router 