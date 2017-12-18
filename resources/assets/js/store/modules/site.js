const site = {
  name: '',
  path: '',
}

export default {
  namespaced: true,
  state: {
    site,
    errors: []
  },
  mutations: {
    setSiteName(state, payload) {
      state.path = payload;
    }
  }
}