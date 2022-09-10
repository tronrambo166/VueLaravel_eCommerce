require('./bootstrap');
const VueRouter = require('./vue-router');

window.Vue = require('vue').default;
console.log('app js');

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

//Vue.component('example-component', require('./components/ExampleComponent.vue').default);
//import * as VueRouter from 'vue-router';
Vue.use(VueRouter);

// routes
import {routes} from './routes/routes';
// routes

const router = new VueRouter({
routes, mode:'history',
base:"laravel_projects/Vue_eCommerce/public", 
});

Vue.component('example-component', require('./components/ExampleComponent.vue').default);

//const  app = new Vue({ router }).$mount('.content2');
const app = new Vue({
el: '.app',
router
//components: {       'expcomp': httpVueLoader('js/components/ExampleComponent.vue'), },       
});



