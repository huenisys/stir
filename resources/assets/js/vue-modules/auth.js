const user = {
  username: '',
  firstname: '',
  lastname: '',
  email: '',
  address: '',
  postcode: '',
  phone: '',
  type: ''
}

export default {
  namespaced: true,
  state: {
    user,
    errors: []
  },
  mutations: {
    setUser(state, payload) {
      state.user = payload;
    },
    setErrors(state, payload) {
      state.errors.push(payload);
    }
  },
  getters: {
    isAdmin(state) {
      return state.user.type === 'admin'
    }
  },
  actions: {
    getCurrentUser(context) {
      window.axios.get('/get-me')
      .then(res => {
        context.commit('setUser', res.data)
      })
      .catch(e => {
        context.commit('setErrors', e)
      })
    }
  }
}