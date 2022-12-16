<template>
  <div class="expert">
    <div class="expert__cart">
      <div class="expert__image">
        <picture v-html="expertData.img"></picture>
      </div>
      <div class="expert__content">
        <div class="expert__title">{{ expertData.title }}</div>
        <div class="expert__id">{{ expertData.telegram }}</div>
      </div>
      <p class="expert__text">
        {{ expertData.description }}
      </p>
    </div>
    <div class="expert__portfolio">
      <div class="portfolio__title">
        Примеры работ {{ getTitle(expertData.title) }}
        <svg
          width="68"
          height="32"
          viewBox="0 0 68 32"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path
            d="M63.9998 31.4586L67.0265 26.5421L61.2553 26.3791L63.9998 31.4586ZM64.6263 26.9334C63.9866 13.5054 54.1238 5.2079 41.3481 2.23417C28.5801 -0.7378 12.7997 1.56489 0.0300199 9.38184L0.552116 10.2347C13.1024 2.5521 28.6144 0.296917 41.1214 3.20814C53.6209 6.11759 63.0159 14.1444 63.6275 26.981L64.6263 26.9334Z"
            fill="#F57B51"
          />
        </svg>
      </div>
      <div class="portfolio__carts">
        <div class="cart" v-for="image in expertData.portfolio" :key="image.ID">
          <picture>
            <source :srcset="getWebp(image.url)" type="image/webp" />
            <img v-lazy="{ src: image.url }" :alt="image.alt" />
          </picture>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
import "../scss/components/expertCart.scss";
import { inclineFirstname } from "lvovich";
export default {
  props: ["expertData"],
  setup() {
    const getTitle = (title) => {
      const first = title.split(" ")[0];
      return inclineFirstname(first, "genitive");
    };

    const getWebp = (url) => {
      const webpUrl = url.split(".png")[0] + ".webp";

      return webpUrl;
    };

    return {
      getTitle,
      getWebp,
    };
  },
};
</script>
