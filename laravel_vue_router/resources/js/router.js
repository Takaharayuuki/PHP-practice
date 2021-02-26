import Router from 'vue-router'
import Home from './views/Home.vue'
import About from './views/About.vue'
import NotFound from './views/NotFound.vue'
import User from './views/User.vue'
import UserDetail from './views/UserDetail.vue'

export default new Router({
  mode: 'history',
  routes: [
    {
      path: '*',
      component: NotFound
    },
    {
      path: '/',
      name: 'home',
      component: Home
    },
    {
      path: '/about',
      name: 'about',
      component: About
    },
    {
      path: '/user',
      name: 'user',
      component: User
    },
    {
      path: '/user/:id',
      name: 'user_detail',
      component: UserDetail
    },
  ]
});
