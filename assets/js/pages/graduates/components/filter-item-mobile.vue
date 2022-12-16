<template>
  <div class="filterItem">
    <div class="filterItem__title" @click="openMobile($event)" ref="titleBlock">
      {{ title }}
      <span>
        <svg
          width="14"
          height="8"
          viewBox="0 0 14 8"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            fill-rule="evenodd"
            clip-rule="evenodd"
            d="M0.227806 0.234315C0.531547 -0.078105 1.02401 -0.078105 1.32775 0.234314L7 6.06863L12.6723 0.234312C12.976 -0.0781071 13.4685 -0.0781072 13.7722 0.234312C14.0759 0.546732 14.0759 1.05326 13.7722 1.36568L7.54997 7.76568C7.24623 8.0781 6.75377 8.0781 6.45003 7.76568L0.227806 1.36569C-0.0759351 1.05327 -0.0759352 0.546734 0.227806 0.234315Z"
            fill="#171717"
          />
        </svg>
      </span>
    </div>
    <div class="filterItem__list" ref="list" v-if="allCheck.length > 0 && !isLoading">
      <label :for="item.ID" class="list__item" v-for="(item, index) in viewCheck()" :key="index">
        <input
          type="checkbox"
          :name="item.title"
          :id="item.ID"
          :value="item.ID"
          v-model="valueChecks"
          @change="updateValue(valueChecks)"
        />
        <div class="item__checkbox">
          <div class="dot">
            <svg
              width="18"
              height="12"
              viewBox="0 0 18 12"
              fill="none"
              xmlns="http://www.w3.org/2000/svg"
            >
              <path
                d="M6.37579 9.54478L2.45679 5.62578C2.26926 5.43831 2.01495 5.33299 1.74979 5.33299C1.48462 5.33299 1.23031 5.43831 1.04279 5.62578C0.855315 5.81331 0.75 6.06762 0.75 6.33278C0.75 6.59794 0.855315 6.85225 1.04279 7.03978L4.96179 10.9588C5.14751 11.1446 5.36803 11.292 5.61073 11.3925C5.85344 11.4931 6.11357 11.5448 6.37629 11.5448C6.639 11.5448 6.89914 11.4931 7.14184 11.3925C7.38454 11.292 7.60506 11.1446 7.79079 10.9588L17.0428 1.70678C17.2303 1.51926 17.3356 1.26495 17.3356 0.999785C17.3356 0.734621 17.2303 0.480313 17.0428 0.292786C16.8553 0.105315 16.601 0 16.3358 0C16.0706 0 15.8163 0.105315 15.6288 0.292786L6.37579 9.54478Z"
                fill="white"
              />
            </svg>
          </div>
        </div>
        <div class="item__text">{{ `${item.title} (${item.count})` }}</div>
      </label>
    </div>
    <div class="filterItem__text" v-if="allCheck.length === 0 && !isLoading">Фильтров нет</div>
  </div>
</template>

<script>
import { onMounted, ref, toRefs, watch, computed } from "vue";

import "../scss/components/filterItem.scss";
import { useStore } from "vuex";

export default {
  props: {
    title: {
      type: String
    },
    allCheck: {
      type: Array
    },
    viewItem: {
      type: Number,
      default: 5
    }
  },

  emits: ["update:modelValue"],

  setup(props, { emit }) {
    const store = useStore();
    const list = ref();
    const isOpen = ref(false);
    const valueChecks = ref([]);
    const { allCheck, viewItem } = toRefs(props);
    const isLoading = computed(() => store.getters.isLoading);

    const getMaxHeight = () => {
      let maxHeight = 0;
      const allItems = list.value.querySelectorAll(".list__item");

      if (isOpen.value) {
        allItems.forEach(el => {
          maxHeight = maxHeight + el.scrollHeight + 16;
        });
        list.value.style.maxHeight = `${maxHeight}px`;
        list.value.previousSibling.classList.add("isOpen");
      } else {
        for (let i = 0; i < allItems.length; i++) {
          if (
            i >=
            (allItems.length <= viewItem ? allItems.length - 1 : viewItem.value)
          )
            break;

          maxHeight = maxHeight + allItems[i].scrollHeight + 16;
        }
        list.value.style.maxHeight = `${maxHeight}px`;
        list.value.previousSibling.classList.remove("isOpen");
      }
    };

    const viewCheck = () => {
      const viewChecks = [];

      allCheck.value.forEach(el => {
        if (el.count > 0) viewChecks.push(el);
      });

      return viewChecks;
    };

    const titleBlock = ref();

    const openMobile = e => {
      if (
        (e.target === titleBlock.value && window.innerWidth < 768) ||
        (e.path.includes(titleBlock.value) && window.innerWidth < 768)
      ) {
        isOpen.value = !isOpen.value;
      }
    };

    watch(isOpen, getMaxHeight);

    onMounted(() => {
      setTimeout(() => {
        getMaxHeight();
      }, 1000);
    });

    const updateValue = value => {
      emit("update:modelValue", value);
    };

    return {
      list,
      isOpen,
      valueChecks,
      titleBlock,
      isLoading,
      updateValue,
      viewCheck,
      openMobile
    };
  }
};
</script>