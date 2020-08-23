import Vue from 'vue'
import Router from 'vue-router'
// import About from '@/view/About'
// import Post from '@/view/post'

// import User from '@/view/user'
// import Kategori from '@/view/kategori'
import Home from '@/components/Home'
import Register from '@/components/Register'
import Login from '@/components/Login'
import Profile from '@/components/Profile'

Vue.use(Router)
export default new Router({
  // mode:"history",
  // base: process.env.BASE_URL,
  routes: [
    {
      path:'/',
      name:'home',
      component: Home
    },
    {
      path:'/login',
      name:'login',
      component: Login
      // component: () => 
      // import("@/view/User.vue")
    },
    {
      path:'/register',
      name:'register',
      component: Register
      // component: () => 
      // import("@/view/User.vue")
    },
    {
      path:'/profile',
      name:'profile',
      component: Profile
      // component: () => 
      // import("@/view/Profile.vue")
      }
   
  ]
});
