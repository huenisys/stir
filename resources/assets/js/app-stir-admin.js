
require('./bootstrap');

import layout from './vue.layout/_admin'
import router from './vue.routing/_admin'

/* eslint-disable no-new */
window.app = new window.Vue({
	el: '#app',
	router,
	template: '<layout/>',
	components: { layout }
})

