import Vue from 'vue'
import Router from 'vue-router'
import g_Home from '../vue.pages/g_Home'
import g_404 from '../vue.pages/g_404'
import g_Test from '../vue.pages/g_Test'

Vue.use(Router)

export default new Router({
	mode: 'history',
	routes: [
		{path: '/', component: g_Home},
		{path: '/test', component: g_Test},
		{path: '*', component: g_404}
	]
})
