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
  setTags(state, { prices, complexity, thematics }) {
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

    state.prices = [...prices];
    state.complexity = [...complexity];
    state.thematics = [...sortArr(thematics)];

    if (state.isLoading) {
      setTimeout(() => {
        state.isLoading = false;
      }, 500);
    }
  },

  filter(state, { prices, complexity, thematics }) {
    state.users = state.usersContainer
      .filter((u) => filterArr(prices, u.prices, "price"))
      .filter((u) => filterArr(complexity, u.complexity, "complexity"))
      .filter((u) => filterArr(thematics, u.thematics, "thematics"));
      

    const arrFilters = {
      prices,
      complexity,
      thematics
    };
    state.allActiveFilters = [];
    for (let key in arrFilters) {
      if (key === "complexity") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.complexity.find((c) => c.ID === el).title,
          });
        }
      } else if (key === "prices") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.prices.find((c) => c.ID === el).title,
          });
        }
      } else if (key === "thematics") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.thematics.find((c) => c.ID === el).title,
          });
        }
      }
    }
    if (state.allActiveFilters.length === 0) {
      state.users = state.usersContainer;
    }

    function filterArr(arr, obj, type) {
      if (arr.length === 0) return true;
      if (type === "price") {
        return arr.some((c) => Object.values(obj).includes(c));
      }
      if (type === "complexity") {
        return arr.some((c) => Object.values(obj).includes(c));
      }
      if (type === "thematics") {
        return arr.some((c) => Object.values(obj).includes(c));
      }
    }
  },
  removeFilter(state, {prices, complexity, thematics }) {
    const arrFilters = {
      prices,
      complexity,
      thematics
    };
    state.allActiveFilters = [];
    for (let key in arrFilters) {
      if (key === "complexity") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.complexity.find((c) => c.ID === el).title,
          });
        }
      } else if (key === "thematics") {
        for (let i = 0; i < arrFilters[key].length; i++) {
          let el = arrFilters[key][i];
          state.allActiveFilters.push({
            ID: el,
            title: state.thematics.find((c) => c.ID === el).title,
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
