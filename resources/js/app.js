/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');
import ElementUI from 'element-ui';
import 'element-ui/lib/theme-chalk/index.css';
import locale from 'element-ui/lib/locale/lang/es'
import Vue from 'vue';
import axios from 'axios';
import VueAxios from 'vue-axios';
import VueRouter from 'vue-router'
Vue.use(VueAxios, axios);
Vue.use(VueRouter);
Vue.use(ElementUI, { locale });

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('contacts-component', require('./components/ContactsComponent.vue').default);
Vue.component('table-LRPM', require('./components/tableComponent/tableComponent.vue').default);
Vue.component('contact-component', require('./components/formsComponent/FormContactComponent.vue').default);

const routes = [
    { path: '/dashboard', component:require('./components/ExampleComponent.vue').default },
    { path: '/contacts', component:require('./components/ContactsComponent.vue').default },
    { path: '/contacts/newContact', component: require('./components/formsComponent/FormContactComponent.vue').default},
  ]
  const router = new VueRouter({
    mode:'history',
    routes
})
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    router
});
