import { computed, ref, watch } from "vue";
import { useStore } from "vuex";

export default function useFilter() {

	const store = useStore();

	const allActiveFilters = computed(() => store.getters.allActiveFilters);
	const activeCourses = ref([]);
	const activeCities = ref([]);
	const activeCountries = ref([]);

	const filter = () => {
		store.commit('filter', {courses: activeCourses.value, cities: activeCities.value, countries: activeCountries.value})
	}

	const removeFilter = (id) => {
		let index = -1;
		index = activeCourses.value.findIndex(el => el === id);
		if(index === -1) {
			index = activeCities.value.findIndex(el => el === id);
		} else {
			activeCourses.value.splice(index, 1);
		}
		if(index === -1) {
			index = activeCountries.value.findIndex(el => el === id);
		} else {
			activeCities.value.splice(index, 1);
		}
		if(index !== -1) {
			activeCountries.value.splice(index, 1);
		}

		store.commit('removeFilter', id);
		filter()
	}

	watch(activeCourses, () => {
		console.log('filter')
		filter()
	})
	watch(activeCities, filter)
	watch(activeCountries, filter)

	return {

		allActiveFilters,
		activeCities,
		activeCourses,
		activeCountries,
		removeFilter

	}
}