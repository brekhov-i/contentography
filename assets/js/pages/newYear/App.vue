<template>
  <div class="main">
    <MobileFilterWindow v-if="mobile" @closeModal="isOpenModal = !isOpenModal" :isOpenModal="isOpenModal" />
    <div class="main__head" v-if="!mobile">
      <div class="head__carts" v-if="allActiveFilters.length > 0">
        <ActiveFilterItem v-for="item in allActiveFilters" :key="item.ID" :item="item" @removeFilter="remove($event)" />
      </div>
      <div class="head__text" v-else>Нет примененных фильтров</div>
    </div>
    <div class="mobileBlockFilters" @click="isOpenModal = true">
      <div class="mobileBlockFilters__title">
        <svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path fill-rule="evenodd" clip-rule="evenodd"
            d="M12.0001 2.5C12.442 2.50002 12.8001 2.87313 12.8001 3.33336L12.8 5.53746C13.9566 5.89603 14.8 7.01208 14.8 8.33333C14.8 9.65459 13.9566 10.7707 12.8 11.1292L12.8001 21.6667C12.8001 22.1269 12.4419 22.5 12.0001 22.5C11.5583 22.5 11.2001 22.1269 11.2001 21.6667L11.2 11.1292C10.0434 10.7707 9.2 9.65459 9.2 8.33333C9.2 7.01207 10.0434 5.896 11.2 5.53744L11.2001 3.3333C11.2001 2.87307 11.5583 2.49998 12.0001 2.5ZM12 7.08333C11.3372 7.08335 10.8 7.64299 10.8 8.33333C10.8 9.02369 11.3373 9.58333 12 9.58333C12.6627 9.58333 13.2 9.02369 13.2 8.33333C13.2 7.64298 12.6627 7.08333 12 7.08333H12ZM20.4 16.6667C20.4 17.357 19.8627 17.9167 19.2 17.9167C18.5373 17.9167 18 17.357 18 16.6667C18 15.9763 18.5373 15.4167 19.2 15.4167C19.8627 15.4167 20.4 15.9763 20.4 16.6667ZM16.4 16.6667C16.4 17.9879 17.2434 19.104 18.4 19.4626L18.4001 21.6667C18.4001 22.1269 18.7583 22.5 19.2001 22.5C19.6419 22.5 20.0001 22.1269 20.0001 21.6666L20 19.4625C21.1566 19.104 22 17.9879 22 16.6667C22 15.3454 21.1566 14.2294 20 13.8708L20.0001 3.33334C20.0001 2.8731 19.6419 2.5 19.2001 2.5C18.7583 2.5 18.4001 2.87309 18.4001 3.33333L18.4 13.8708C17.2434 14.2293 16.4 15.3454 16.4 16.6667ZM4.00005 16.1292C2.84343 15.7707 2 14.6546 2 13.3333C2 12.0121 2.84343 10.896 4.00005 10.5374L4 3.33334C4 2.8731 4.35817 2.5 4.79999 2.5C5.24182 2.5 5.6 2.87309 5.6 3.33333L5.60005 10.5375C6.75662 10.896 7.6 12.0121 7.6 13.3333C7.6 14.6546 6.75662 15.7706 5.60005 16.1292L5.6 21.6667C5.6 22.1269 5.24182 22.5 4.79999 22.5C4.35816 22.5 4 22.1269 4 21.6667L4.00005 16.1292ZM4.80002 12.0833C4.80001 12.0833 4.80001 12.0833 4.8 12.0833C4.13726 12.0833 3.6 12.643 3.6 13.3333C3.6 14.0237 4.13726 14.5833 4.8 14.5833C5.46275 14.5833 6 14.0237 6 13.3333C6 12.643 5.46275 12.0833 4.80002 12.0833Z"
            fill="#171717" />
        </svg>
        Фильтры
        <span v-if="allActiveFilters.length !== 0">{{ allActiveFilters.length }}</span>
      </div>
    </div>
    <div class="main__filters" v-if="!mobile">
      <div class="filters__items">
        <FilterItem :allCheck="allPrices" title="Стоимость обучения" v-model="activePrices" textOneInput="Любая"
          @clear="clearActive('activePrices')" />
        <FilterItem :allCheck="allComplexity" title="Уровень сложности" v-model="activeComplexity"
          textOneInput="Все уровни" @clear="clearActive('activeComplexity')" />
        <FilterItem :allCheck="allThematics" title="Тематика" v-model="activeThematics" textOneInput="Все тематики"
          @clear="clearActive('activeThematics')" />
      </div>
    </div>
    <div class="main__carts">
      <CourseCart v-for="cart in allCarts" :key="cart.ID" :cartInfo="cart" v-if="!isLoading" />
      <div class="main-carts__loader" v-else-if="isLoading">
        <div class="lds-dual-ring"></div>
      </div>
    </div>
  </div>
</template>

<script>
import { onMounted, ref, computed, watch } from "vue";
import { useStore } from "vuex";

import ActiveFilterItem from "./components/active-filter-item.vue";
import FilterItem from "./components/filter-item.vue";

import "./scss/main.scss";
import CourseCart from "./components/course-cart.vue";
import MobileFilterWindow from "./components/mobile-filter-window.vue";

export default {
  setup() {
    const store = useStore();
    const allPrices = computed(() => store.getters.prices);
    const activePrices = ref([]);
    const allComplexity = computed(() => store.getters.complexity);
    const activeComplexity = ref([]);
    const allThematics = computed(() => store.getters.thematics);
    const activeThematics = ref([]);
    const allActiveFilters = computed(() => store.getters.allActiveFilters);
    const allCarts = computed(() => store.getters.users);
    const isLoading = computed(() => store.getters.isLoading);
    const isOpen = ref(false);
    const windowUser = ref();
    const mobile = ref(false);
    const isOpenModal = ref(false);

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

    const clearActive = (text) => {
      if (text === 'activePrices') {
        activePrices.value = [];
      }
      if (text === 'activeComplexity') {
        activeComplexity.value = [];
      }
      if (text === 'activeThematics') {
        activeThematics.value = [];
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
    }

    watch(activePrices, () => filter());
    watch(activeComplexity, () => filter());
    watch(activeThematics, () => filter());

    onMounted(() => {
      store.dispatch("getUsers");
      store.dispatch("getAllTags");
      mobile.value = window.innerWidth > 768 ? false : true;
    });

    return {
      allCarts,
      allPrices,
      activePrices,
      allComplexity,
      activeComplexity,
      allThematics,
      activeThematics,
      isOpen,
      windowUser,
      allActiveFilters,
      mobile,
      isOpenModal,
      isLoading,
      remove,
      clearActive
    };
  },

  components: {
    ActiveFilterItem,
    FilterItem,
    CourseCart,
    MobileFilterWindow
  }
};
</script>