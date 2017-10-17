import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '../vue.pages/Dashboard.user'
import UserEdit from '../vue.pages/UserEdit.user'
import p404 from '../vue.pages/p404'

Vue.use(Router)

export default new Router({
	routes: [
		{path: '', redirect: '/dashboard'},
		{path: '/dashboard', component: Dashboard},
		{path: '/profile-edit', name: 'UserEdit', component: UserEdit, props: true},
		{path: '*', component: p404}
	]
})
