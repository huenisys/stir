import Vue from 'vue'
import Router from 'vue-router'
import Dashboard from '../vue.pages/Dashboard.admin'
import Users from '../vue.pages/Users.admin'
import UserAdd from '../vue.pages/UserAdd.admin'
import UserEdit from '../vue.pages/UserEdit.admin'

import p404 from '../vue.pages/p404'

Vue.use(Router)

export default new Router({
	routes: [
		{path: '', redirect: 'dashboard'},
		{path: '/dashboard', component: Dashboard},
		{path: '/users',component: Users},
		{path: '/user/:id/edit', name: 'UserEdit', component: UserEdit},
		{path: '/user', name: 'UserAdd', component: UserAdd},
		{path: '*', component: p404}
	]
})
