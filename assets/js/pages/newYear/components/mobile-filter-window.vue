<template>
  <teleport to="body">
    <div :class="['filterWindow', isOpenModal ? 'isOpen' : '']">
      <button class="filterWindow__close" @click="closeModalForm">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12.8867 11.6573L20.7172 4.37978L19.2773 2.83057L11.4469 10.1081L12.1673 10.8833L12.8867 11.6573Z"
            fill="#171717" />
          <path d="M9.89844 11.5479L2.06677 18.8265L3.50658 20.3757L11.3382 13.0971L10.6189 12.323L9.89844 11.5479Z"
            fill="#171717" />
          <path d="M11.4474 10.1083L4.16992 2.27783L2.62071 3.71764L9.89823 11.5481L10.6723 10.8288L11.4474 10.1083Z"
            fill="#171717" />
          <path d="M20.1653 19.4889L12.8867 11.6572L12.1115 12.3777L11.3375 13.097L18.6161 20.9287L20.1653 19.4889Z"
            fill="#171717" />
        </svg>
      </button>
      <div class="filterWindow__title">
        Фильтры
        <span>{{ allActiveFilters.length }}</span>
      </div>
      <div class="filterWindow__activeFilter">
        <div class="activeFilter__carts" v-if="allActiveFilters.length > 0">
          <ActiveFilterItem v-for="item in allActiveFilters" :key="item.ID" :item="item"
            @removeFilter="remove($event)" />
        </div>
        <div class="activeFilter__text" v-else>Нет примененных фильтров</div>
      </div>
      <div class="filterWindow__items">
        <FilterItemMobile :allCheck="allPrices" title="Стоимость обучения" v-model="activePrices" :viewItem="0" />
        <FilterItemMobile :allCheck="allComplexity" title="Уровень сложности" v-model="activeComplexity"
          :viewItem="0" />
        <FilterItemMobile :allCheck="allThematics" title="Тематика" v-model="activeThematics" :viewItem="0" />
      </div>
    </div>
  </teleport>
</template>

<script>
import { useStore } from "vuex";
import { computed, ref, toRef, toRefs, watch } from "vue";

import "../scss/components/mobileFilterWindow.scss";
import ActiveFilterItem from "./active-filter-item.vue";
import FilterItemMobile from "./filter-item-mobile.vue";

export default {
  props: ["isOpenModal"],

  emits: ["closeModal"],

  setup(props, { emit }) {
    const store = useStore();
    const allPrices = computed(() => store.getters.prices);
    const activePrices = ref([]);
    const allComplexity = computed(() => store.getters.complexity);
    const activeComplexity = ref([]);
    const allThematics = computed(() => store.getters.thematics);
    const activeThematics = ref([]);
    const allActiveFilters = computed(() => store.getters.allActiveFilters);
    const { isOpenModal } = toRefs(props);

    const remove = obj => {
      let index = activePrices.value.findIndex(el => el === obj.ID);

      if (index !== -1) {
        activePrices.value.splice(index, 1);
      } else {
        index = activeComplexity.value.findIndex(el => el === obj.ID);
        if (index !== -1) {
          activeComplexity.value.splice(index, 1);
        } else {
          index = activeThematics.value.findIndex(el => el === obj.ID);
          if (index !== -1) {
            activeThematics.value.splice(index, 1);
          }
        }
      }

      store.commit("removeFilter", {
        prices: activePrices.value,
        complexity: activeComplexity.value,
        thematics: activeThematics.value
      });
      store.commit("filter", {
        prices: activePrices.value,
        complexity: activeComplexity.value,
        thematics: activeThematics.value
      });
    };

    const filter = () => {
      store.commit("filter", {
        prices: activePrices.value,
        complexity: activeComplexity.value,
        thematics: activeThematics.value
      });
    };


    const closeModalForm = () => {
      emit("closeModal");
    };

    watch(activePrices, () => filter());
    watch(activeComplexity, () => filter());
    watch(activeThematics, () => filter());

    watch(isOpenModal, () => {
      if (isOpenModal.value) {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = "auto";
      }
    });

    return {
      allPrices,
      activePrices,
      allComplexity,
      activeComplexity,
      allThematics,
      activeThematics,
      allActiveFilters,
      remove,
      closeModalForm
    };
  },

  components: { ActiveFilterItem, FilterItemMobile }
};
</script>