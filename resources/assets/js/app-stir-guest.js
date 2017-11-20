
require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import layout from './vue.layout/_guest'
import router from './vue.routing/_guest'

Vue.use(BootstrapVue);

/* eslint-disable no-new */
const app = new Vue({
	el: '#guest',
	router,
	template: '<layout/>',
	components: { layout }
})
