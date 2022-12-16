export default {
  setUsers(state, users) {
    state.users = [...users];
    state.usersContainer = [...users];
    if (state.isLoading) {
      setTimeout(() => {
        state.isLoading = false;
      }, 500);
    }
  },
  setTags(state, { cities, countries, experience, courses }) {
    const sortArr = (arr) => {
      return arr.sort((a, b) => {
        if (a.count > b.count) {
          return -1;
        }
        if (a.count < b.count) {
          return 1;
        }
        // a должно быть равным b
        return 0;
      });
    };

    state.cities = [...sortArr(cities)];
    state.countries = [...sortArr(countries)];
    state.experience = experience;
    state.courses = [...sortArr(courses)];

    if (state.isLoading) {
      setTimeout(() => {
        state.isLoading = false;
      }, 500);
    }
  },

  filter(state, { courses, cities, countries }) {
    state.users = state.usersContainer
      .filter((u) => filterArr(countries, u.countries, "country"))
      .filter((u) => filterArr(courses, u.acf.courses, "course"))
      .filter((u) => filterArr(cities, u.cities, "city"));

    const arrFilters = {
      courses,
      cities,
      countries,
    };
    state.allActiveFilters = [];
    for (let key in arrFilters) {
      if (key === "courses") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.courses.find((c) => c.ID === el).title,
          });
        }
      } else if (key === "cities") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.cities.find((c) => c.ID === el).title,
          });
        }
      } else if (key === "countries") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.countries.find((c) => c.ID === el).title,
          });
        }
      }
    }
    if (state.allActiveFilters.length === 0) {
      state.users = state.usersContainer;
    }

    function filterArr(arr, obj, type) {
      if (arr.length === 0) return true;
      if (type === "course") {
        return arr.some((c) => Object.values(obj).includes(c));
      } else if (type === "city") {
        return arr.some((c) =>
          obj.findIndex((el) => el.ID === c) === -1 ? false : true
        );
      } else if (type === "country") {
        return arr.some((c) =>
          obj.findIndex((el) => el.ID === c) === -1 ? false : true
        );
      }
    }
  },
  removeFilter(state, { courses, cities, countries }) {
    const arrFilters = {
      courses,
      cities,
      countries,
    };
    state.allActiveFilters = [];
    for (let key in arrFilters) {
      if (key === "courses") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.courses.find((c) => c.ID === el).title,
          });
        }
      } else if (key === "cities") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.cities.find((c) => c.ID === el).title,
          });
        }
      } else if (key === "countries") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.countries.find((c) => c.ID === el).title,
          });
        }
      }
    }
  },
};
