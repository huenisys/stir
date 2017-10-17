import Vue from 'vue'
import Router from 'vue-router'
import Home from '../vue.pages/Home'
import BookingStep1 from '../vue.pages/BookingStep1'
import BookingStep2 from '../vue.pages/BookingStep2'
import BookingStep3 from '../vue.pages/BookingStep3'
import p404 from '../vue.pages/p404'

Vue.use(Router)

export default new Router({
	mode: 'history',
	routes: [
		{path: '/', component: BookingStep1},
		{path: '/booking-step-1', component: BookingStep1},
		{path: '/booking-step-2', component: BookingStep2},
		{path: '/booking-step-3', component: BookingStep3},
		{path: '*', component: p404}
	]
})
