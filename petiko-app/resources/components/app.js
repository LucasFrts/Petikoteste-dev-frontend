require('./bootstrap')

import Vue from 'vue'


console.log('teste')

Vue.component("home-component", ()=> import("./home/HomeComponent.vue"))
Vue.component("nav-bar", ()=> import("./util/Navbar.vue"))
window.onload = function () {
    const app = new Vue({
        el: '#app',
    });
}