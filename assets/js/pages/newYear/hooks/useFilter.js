import { computed, ref, watch } from "vue";
import { useStore } from "vuex";

export default function useFilter() {
  const store = useStore();

  const allActiveFilters = computed(() => store.getters.allActiveFilters);
  const activePrices = ref([]);
  const activeComplexity = ref([]);
  const activeThematics = ref([]);

  const filter = () => {
    store.commit("filter", {
      prices: activePrices.value,
      complexity: activeComplexity.value,
      thematics: activeThematics.value,
    });
  };

  const removeFilter = (id) => {
    let index = -1;
    index = activePrices.value.findIndex((el) => el === id);
    if (index === -1) {
      index = activeComplexity.value.findIndex((el) => el === id);
    } else {
      activePrices.value.splice(index, 1);
    }
    if (index === -1) {
      index = activeThematics.value.findIndex((el) => el === id);
    } else {
      activeComplexity.value.splice(index, 1);
    }
    if (index !== -1) {
      activeThematics.value.splice(index, 1);
    }

    store.commit("removeFilter", id);
    filter();
  };

  watch(activePrices, () => {
    filter;
  });
  watch(activeComplexity, filter);
  watch(activeThematics, filter);

  return {
    allActiveFilters,
    activePrices,
    activeComplexity,
    activeThematics,
    removeFilter,
  };
}
