require('./bootstrap');

import AddNewItems from './components/AddNewItems.vue'
import Quiz from './components/Quiz.vue'

var router = new VueRouter({

  routes: [
    {
      path: '/',
      component: Quiz
    },
    {
      path: '/addItems',
      component: AddNewItems
    },
  ]
})

var app = new Vue({
  el: "#home",
  router: router
})
