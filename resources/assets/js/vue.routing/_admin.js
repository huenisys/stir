import Vue from 'vue'
import Router from 'vue-router'
import a_Dashboard from '../vue.pages/a_Dashboard'
import a_Users from '../vue.pages/a_Users'
import a_UserAdd from '../vue.pages/a_UserAdd'
import a_UserEdit from '../vue.pages/a_UserEdit'

import g_404 from '../vue.pages/g_404'

Vue.use(Router)

export default new Router({
	routes: [
		{path: '', redirect: 'home'},
		{path: '/home', component: a_Dashboard},
		{path: '/users',component: a_Users},
		{path: '/user/:id/edit', name: 'UserEdit', component: a_UserEdit},
		{path: '/user', name: 'UserAdd', component: a_UserAdd},
		{path: '*', component: g_404}
	]
})
