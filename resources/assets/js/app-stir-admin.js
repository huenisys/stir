
require('./bootstrap');

import Vue from 'vue'
import layout from './vue.layout/_admin'
import router from './vue.routing/_admin'

/* eslint-disable no-new */
const app = new Vue({
	el: '#app',
	router,
	template: '<layout/>',
	components: { layout }
})

