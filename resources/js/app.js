require('./bootstrap');

import Home from './components/Home.vue'
import AddNewItems from './components/AddNewItems.vue'
import Quiz from './components/Quiz.vue'
import QuizResult from './components/QuizResult.vue'

var router = new VueRouter({

  routes: [
    {
      path: '/',
      component: Home
    },
    {
      path: '/addItems',
      component: AddNewItems
    },
    {
      path: '/quiz',
      component: Quiz
    },
    {
      path: '/quizResult/:totalScore',
      component: QuizResult
    },
  ]
})

var app = new Vue({
  el: "#home",
  router: router
})
