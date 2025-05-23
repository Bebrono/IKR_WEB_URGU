import { createRouter, createWebHistory } from 'vue-router'
import InvestmentDeclaration from '../components/InvestmentDeclaration.vue'
import InvestmentAgency from '../components/InvestmentAgency.vue'
import InvestmentMap from '../components/InvestmentMap.vue'
import InvestmentCommittee from '../components/InvestmentCommittee.vue'
import InvestmentRules from '../components/InvestmentRules.vue'

const router = createRouter({
  history: createWebHistory(),
  routes: [
    {
      path: '/',
      name: 'home',
      component: () => import('../components/HomePage.vue')
    },
    {
      path: '/investment-declaration',
      name: 'investment-declaration',
      component: InvestmentDeclaration
    },
    {
      path: '/investment-agency',
      name: 'investment-agency',
      component: InvestmentAgency
    },
    {
      path: '/investment-map',
      name: 'investment-map',
      component: InvestmentMap
    },
    {
      path: '/investment-committee',
      name: 'investment-committee',
      component: InvestmentCommittee
    },
    {
      path: '/investment-rules',
      name: 'investment-rules',
      component: InvestmentRules
    }
  ]
})

export default router 