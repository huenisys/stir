import Vue from 'vue'
import Router from 'vue-router'
import Home from '../vue.pages/Home'
import p404 from '../vue.pages/p404'

Vue.use(Router)

export default new Router({
	mode: 'history',
	routes: [
		{path: '/', component: Home},
		{path: '*', component: p404}
	]
})
