import Vue from 'vue';


window.axios = require('axios');



Vue.component('register-portal', require('./components/subscribtion.vue').default);

const app = new Vue({
    el: '#app'
});
