export const usersContainer = state => state.usersContainer;
export const users = state => state.users;
export const prices = state => state.prices;
export const complexity = state => state.complexity;
export const thematics = state => state.thematics;
export const isLoading = state => state.isLoading;
export const allActiveFilters = state => state.allActiveFilters;

export const getCourseById = (state, id) => {
  return state.courses.find(el => el.id === id);
}