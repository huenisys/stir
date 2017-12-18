import Vue from 'vue'
import Router from 'vue-router'
import u_Dashboard from '../vue.pages/u_Dashboard'
import u_ProfileEdit from '../vue.pages/u_ProfileEdit'
import g_404 from '../vue.pages/g_404'

Vue.use(Router)

export default new Router({
	//mode: 'history',
	routes: [
		{path: '', redirect: '/home'},
		{path: '/home', name:'user-dashboard', component: u_Dashboard},
		{path: '/profile-edit', name: 'UserEdit', component: u_ProfileEdit, props: true},
		{path: '*', component: g_404}
	]
})
