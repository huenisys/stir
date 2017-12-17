
require('./bootstrap');

import Vuex from 'vuex'
import store from './store'
import layout from './vue.dashboard-layout/_user'
import router from './vue.routing/_user'

window.Vue.use(Vuex);

/* eslint-disable no-new */
window.app = new window.Vue({
	el: 'user',
  store: new Vuex.Store(store),
	router,
	template: '<layout/>',
	components: { layout }
})

