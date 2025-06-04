import { createRouter, createWebHistory } from 'vue-router'
import HomeView from '../views/HomeView.vue'
import CadastroUsuario from '@/views/CadastroUsuario.vue'
import ListaProfissionais from '@/views/ListaProfissionais.vue'

const router = createRouter({
  history: createWebHistory(import.meta.env.BASE_URL),
  routes: [
    {
      path: '/',
      name: 'home',
      component: HomeView,
    },
    {
      path: '/cadastro',
      name: 'CadastroUsuario',
      component: CadastroUsuario
    },

    {
      path: '/profissionais',
      name: 'ListaProfissionais',
      component: ListaProfissionais
    }
  ],
})

export default router
