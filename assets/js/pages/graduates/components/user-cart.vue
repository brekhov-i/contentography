<template>
  <div class="userCart" @click="openWindow">
    <div class="userCart__image">
      <picture>
        <img :src="userInfo.acf.gallery[0].url" :alt="userInfo.acf.gallery[0].alt" />
      </picture>
    </div>
    <div class="userCart__info">
      <div class="userCart__avatar">
        <picture>
          <img :src="userInfo.acf.avatarka.url" :alt="userInfo.acf.avatarka.url" />
        </picture>
      </div>
      <div class="userCart__title">{{ userInfo.title }}</div>
      <div class="userCart__arrow">
        <svg
          width="60"
          height="12"
          viewBox="0 0 60 12"
          fill="none"
          xmlns="http://www.w3.org/2000/svg"
        >
          <path d="M60 6L50 0.226497V11.7735L60 6ZM0 7H51V5H0V7Z" fill="#F57B51" />
        </svg>
      </div>
    </div>
  </div>
</template> 

<script>
import "../scss/components/userCart.scss";

export default {
  props: ["userInfo"],
  setup({userInfo}, {emit}) {

    const openWindow = () => {
      console.log(userInfo.ID)
      emit('openWindow', userInfo.ID)
    }

    return {
      openWindow
    }

  }
};
</script>