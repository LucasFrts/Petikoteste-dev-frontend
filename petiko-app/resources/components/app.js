require('./bootstrap')

import Vue from 'vue'


console.log('teste')

Vue.component("home-component", ()=> import("./home/HomeComponent.vue"))

window.onload = function () {
    const app = new Vue({
        el: '#app',
    });
}