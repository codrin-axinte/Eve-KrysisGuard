
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
//Vue.component('app-cookie-nag', require('./components/App/CookieNag'));
Vue.component('app-sidebar', require('./components/App/Sidebar'));
Vue.component('app-widget', require('./components/Widgets/Widget'));
Vue.component('ore-calculator', require('./components/OreCalculator'));
Vue.component('ore-table', require('./components/OreTable'));
Vue.component('post-card', require('./components/Blog/PostCard'));
const app = new Vue({
    el: '#app'
});
