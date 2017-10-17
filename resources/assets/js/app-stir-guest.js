
require('./bootstrap');

import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import layout from './vue.layout/_guest'
import router from './vue.routing/_guest'

Vue.use(BootstrapVue);

/* eslint-disable no-new */
const app = new Vue({
	el: '#app',
	router,
	template: '<layout/>',
	components: { layout }
})

window.$(function(){
  $('#bookingModal').on('hide.bs.modal', function (event) {
		var modal = $(this)
		modal.find('.modal-title').text('Step 1')
    location.hash = '/';
    history.pushState({extraData: "some state info"}, '', '/');

  })
});
