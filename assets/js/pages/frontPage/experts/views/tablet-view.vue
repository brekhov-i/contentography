<template>
  <div class="experts experts--tablet">
    <h2 class="section-title experts__title">Эксперты — топовые фотографы</h2>
    <div class="experts__carts">
      <ExpertCart
        v-for="expert in experts"
        :key="expert.ID"
        :expertData="expert"
        @hover="setPortfolio($event)"
      />
    </div>
    <div class="experts__description">
      Мы приглашаем экспертов по принципу “лучший в своем деле”: каждый из них
      не просто топовый практикующий фотограф, но и тот, кого мы знаем много лет
      и доверяем.
    </div>
    <div class="experts__images">
      <div class="images__wrapper">
        <div class="images__title">
          Примеры работ {{ titleName }}
          <svg
            width="84"
            height="48"
            viewBox="0 0 84 48"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M77.2286 47.7039L83.1043 37.7636L71.5579 37.6452L77.2286 47.7039ZM78.3168 38.616C77.1867 26.1115 70.5608 16.4852 57.7304 10.0377C44.9719 3.62638 26.0765 0.349325 0.29089 0.349379L0.2909 2.34938C25.9657 2.34933 44.4891 5.62207 56.8324 11.8248C69.1038 17.9914 75.2628 27.0435 76.3249 38.796L78.3168 38.616Z"
              fill="#F57B51"
            />
          </svg>
        </div>
        <div class="images__carts">
          <div class="cart" v-for="image in imagesPortfolio" :key="image.ID">
            <picture>
              <source :srcset="getWebp(image.url)" type="image/webp" />
              <img v-lazy="{ src: image.url }" :alt="image.alt" />
            </picture>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import { computed, onMounted, ref, watch } from "@vue/runtime-core";
import { useStore } from "vuex";
import { inclineFirstname } from "lvovich";

import ExpertCart from "../components/expert-cart.vue";
export default {
  setup() {
    const store = useStore();
    const experts = computed(() => store.getters.experts);
    const imagesPortfolio = ref([]);
    const titleName = ref();

    const setPortfolio = (expert) => {
      imagesPortfolio.value = expert.portfolio;
      const first = expert.title.split(" ")[0];
      titleName.value = inclineFirstname(first, "genitive");
    };

    const getWebp = (url) => {
      const webpUrl = url.split(".png")[0] + ".webp";

      return webpUrl;
    };

    watch(experts, () => {
      setPortfolio(experts.value[0]);
    });

    return {
      experts,
      imagesPortfolio,
      titleName,
      setPortfolio,
      getWebp,
    };
  },
  components: { ExpertCart },
};
</script>
