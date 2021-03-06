
require('./bootstrap');

import Vuex from 'vuex'
import store from './store'
import layout from './vue.layout/_user'
import router from './vue.routing/_user'

window.Vue.use(Vuex);

/* eslint-disable no-new */
window.user = new window.Vue({
	el: 'user',
  store: new Vuex.Store(store),
	router,
	template: '<layout />',
	components: { layout }
})

