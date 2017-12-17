
require('./bootstrap');

//import BootstrapVue from 'bootstrap-vue'
import layout from './vue.layout/_guest'
import router from './vue.routing/_guest'

//window.Vue.use(BootstrapVue);

/* eslint-disable no-new */
window.guest = new window.Vue({
	el: 'guest',
	router,
	template: '<layout/>',
	components: { layout }
})
