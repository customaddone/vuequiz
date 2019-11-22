require('./bootstrap');

import AddNewItems from './components/AddNewItems.vue'

var router = new VueRouter({

  routes: [
    {
      path: '/',
      component: AddNewItems
    },
  ]
})

var app = new Vue({
  el: "#home",
  router: router
})
