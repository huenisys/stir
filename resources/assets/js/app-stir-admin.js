
require('./bootstrap');

import Vuex from 'vuex'
import store from './store'
import layout from './vue.layout/_admin'
import router from './vue.routing/_admin'

window.Vue.use(Vuex);

/* eslint-disable no-new */
window.admin = new window.Vue({
	el: 'admin',
  store: new Vuex.Store(store),
	router,
	template: '<layout />',
	components: { layout }
})

