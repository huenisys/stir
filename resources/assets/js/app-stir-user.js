
require('./bootstrap');

import Vue from 'vue'
import layout from './vue.layout/_user'
import router from './vue.routing/_user'

/* eslint-disable no-new */
const app = new Vue({
	el: '#app',
	router,
	template: '<layout/>',
	components: { layout }
})

