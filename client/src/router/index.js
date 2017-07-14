import Vue from 'vue'
import Router from 'vue-router'
import layout from '@/views/layout'
import hello from '@/views/index/hello'

Vue.use(Router)

export default new Router({
  routes: [
    {
      path: '/',
      component: layout,
      children: [
        { path: '/', component: hello }
      ]
    }
  ]
})
