<template>
  <div class="expert" @mouseenter="hover">
    <div class="expert__image">
      <div class="expert__id">{{ expertData.telegram }}</div>
      <picture v-html="expertData.img"></picture>
    </div>
    <div class="expert__content">
      <div class="expert__title">{{ expertData.title }}</div>
      <p class="expert__text">
        {{ expertData.description }}
      </p>
    </div>
  </div>
</template>

<script>
import { toRefs } from "@vue/reactivity";

import "../scss/components/expertCart.scss";
export default {
  props: ["expertData"],
  setup(props, { emit }) {
    const { expertData } = toRefs(props);
    const hover = () => {
      emit("hover", expertData.value);
    };

    return {
      hover,
    };
  },
};
</script>
