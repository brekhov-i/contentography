<template>
  <section class="experts experts--mobile">
    <div class="container">
      <div class="experts__wrapper">
        <h2 class="section-title experts__title">
          Эксперты — топовые фотографы
        </h2>
        <p class="experts__description">
          Мы приглашаем экспертов по принципу “лучший в своем деле”: каждый из
          них не просто топовый практикующий фотограф, но и тот, кого мы знаем
          много лет и доверяем.
        </p>
        <div class="experts__carts">
          <ExpertCartMobile
            v-for="expert in experts"
            :key="expert.ID"
            :expertData="expert"
          />
        </div>
      </div>
    </div>
  </section>
</template>

<script>
import { ref, computed, watch } from "@vue/reactivity";
import { useStore } from "vuex";
import ExpertCartMobile from "../components/expert-cartMobile.vue";
export default {
  setup() {
    const store = useStore();
    const experts = computed(() => store.getters.experts);

    return {
      experts,
    };
  },
  components: { ExpertCartMobile },
};
</script>
