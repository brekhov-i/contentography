export const usersContainer = state => state.usersContainer;
export const users = state => state.users;
export const cities = state => state.cities;
export const countries = state => state.countries;
export const courses = state => state.courses;
export const isLoading = state => state.isLoading;
export const allActiveFilters = state => state.allActiveFilters;

export const getCourseById = (state, id) => {
  return state.courses.find(el => el.id === id);
}