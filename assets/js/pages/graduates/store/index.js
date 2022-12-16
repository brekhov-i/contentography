import { createStore, createLogger } from 'vuex'
import * as getters from './getters'
import * as actions from './actions'
import mutations from './mutations'

const state = {
  users: [],
  usersContainer: [],
  cities: [],
  countries: [],
  courses: [],
  experience: {},
  isLoading: true,
  allActiveFilters: [],
  filterActiveCourses: [],
  filterActiveCountries: [],
  filterActiveCities: []
}

export default createStore({
  state,
  getters,
  actions,
  mutations,
  plugins: process.env.NODE_ENV !== 'production'
    ? [createLogger()]
    : []
})
