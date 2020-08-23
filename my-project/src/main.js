// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router' 
import jQuery from 'jquery';
window.$ = window.jQuery = jQuery;
import 'popper.js';
import 'bootstrap';
import './assets/app.scss';
require('../node_modules/bootstrap/dist/css/bootstrap.css')

// Vue.component('Navbar', require('@/components/Navbar.vue').default);

Vue.config.productionTip = false

/* eslint-disable no-new */
new Vue({
  el: '#app',
  router,
  components: { App },
  template: '<App/>'
  // render: h=> h(App)
})
// .$amount("App");