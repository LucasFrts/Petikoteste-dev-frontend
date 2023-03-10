require('./bootstrap')

import Vue from 'vue'

Vue.component("home-component", ()=> import("./home/HomeComponent.vue"))
Vue.component("subscribe-component", ()=> import("./subscribe/SubscribeComponent.vue"))
Vue.component("subscribers-component", ()=> import("./subscribers/SubscribersComponent.vue"))
Vue.component("about-component", ()=> import("./about/AboutComponent.vue"))
Vue.component("nav-bar", ()=> import("./util/Navbar.vue"))
window.onload = function () {
    const app = new Vue({
        el: '#app',
    });
}