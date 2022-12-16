<template>
  <teleport to="body">
    <div class="userModal" v-if="isOpenWindow" @click="closeWindow($event)" ref="containerWindow">
      <div class="userModal__wrapper">
        <button class="userModal__close" @click="closeWindow($event)" ref="closeBtn">
          <svg
            width="24"
            height="24"
            viewBox="0 0 24 24"
            fill="none"
            xmlns="http://www.w3.org/2000/svg"
          >
            <path
              d="M12.8867 11.6573L20.7172 4.37978L19.2773 2.83057L11.4469 10.1081L12.1673 10.8833L12.8867 11.6573Z"
              fill="#171717"
            />
            <path
              d="M9.89746 11.5479L2.06579 18.8265L3.5056 20.3757L11.3373 13.0971L10.6179 12.323L9.89746 11.5479Z"
              fill="#171717"
            />
            <path
              d="M11.4474 10.1083L4.16992 2.27783L2.62071 3.71764L9.89823 11.5481L10.6723 10.8288L11.4474 10.1083Z"
              fill="#171717"
            />
            <path
              d="M20.1653 19.4889L12.8867 11.6572L12.1115 12.3777L11.3375 13.097L18.6161 20.9287L20.1653 19.4889Z"
              fill="#171717"
            />
          </svg>
        </button>
        <div class="userModal__tags">
          <div class="cart" v-for="(item, index) in allTags" :key="index">{{ item }}</div>
        </div>
        <div class="userModal__content">
          <div class="userModal__avatar">
            <picture>
              <img :src="user.acf.avatarka.url" :alt="user.acf.avatarka.alt" />
            </picture>
          </div>
          <div class="userModal__title">{{ user.title }}</div>
          <div class="userModal__description" v-html="user.content"></div>
          <div class="userModal__contacts">
            <a :href="user.acf.vk" class="userModal__vk" target="_blank" v-if="user.acf.vk !== '#'">
              <svg
                width="40"
                height="40"
                viewBox="0 0 40 40"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <circle cx="20" cy="20" r="20" fill="#F57B51" />
                <path
                  d="M27.897 23.8998C25.9877 22.0311 26.2314 22.3154 28.547 19.1061C29.9283 17.1561 30.497 15.9373 30.3345 15.4092C30.2533 15.0842 29.1564 15.1654 29.1564 15.1654H25.7439C25.7439 15.1654 25.2158 15.1654 25.0127 15.5311C24.647 16.2217 24.4845 17.0748 23.7533 18.3342C22.2095 21.0561 21.6002 21.2186 21.3564 21.0561C20.7877 20.6498 20.9095 19.4717 20.9095 18.6186C20.9095 15.9779 21.2752 14.8811 20.1783 14.5561C19.9345 14.4748 19.7314 14.4748 19.3658 14.4342C18.9189 14.3936 18.472 14.3936 18.0658 14.3936C17.0502 14.3936 16.2783 14.4342 15.7502 14.6779C15.3439 14.8811 15.0595 15.3279 15.2627 15.3686C15.5064 15.4092 15.9939 15.5311 16.2783 15.8967C16.6439 16.3842 16.6033 17.5217 16.6033 17.5217C16.6033 17.5217 16.8064 20.6498 16.1158 21.0154C15.6689 21.2998 15.0189 20.7311 13.6783 18.2529C12.9877 16.9936 12.9064 16.1404 12.4595 15.5717C12.1752 15.2061 11.647 15.0842 11.647 15.0842H8.39703C8.39703 15.0842 7.82828 15.0436 7.74703 15.2061C7.58453 15.4092 7.74703 15.8154 7.74703 15.8154C7.74703 15.8154 10.3064 22.1123 13.1908 25.2811C15.7502 28.2873 18.7564 28.1248 18.7564 28.1248C18.7564 28.1248 20.5033 28.2061 20.747 27.7592C20.9095 27.5967 20.9502 27.1092 20.9502 27.1092C20.9502 27.1092 20.9095 25.1592 21.7627 24.8748C22.6158 24.5904 23.672 26.7436 24.8095 27.5561C25.6627 28.2061 25.9064 28.1248 26.3127 28.1248C27.1252 28.1248 29.3595 28.1248 29.3595 28.1248C29.3595 28.1248 30.9439 27.9623 30.2127 26.6217C30.0908 26.5404 29.7252 25.6873 27.897 23.8998Z"
                  fill="white"
                />
              </svg>
            </a>
            <a
              :href="user.acf.telegram"
              class="userModal__telegram"
              v-if="user.acf.telegram !== '#'"
              target="_blank"
            >
              <svg
                width="40"
                height="40"
                viewBox="0 0 40 40"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  d="M20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0ZM30.3952 12.6513L26.843 29.6094C26.8001 29.8145 26.7062 30.0055 26.5702 30.1649C26.4341 30.3243 26.2602 30.4469 26.0643 30.5215C25.8685 30.5961 25.6571 30.6203 25.4494 30.5919C25.2418 30.5635 25.0447 30.4833 24.8761 30.3588L19.7092 26.5416L16.5789 29.4947C16.5379 29.5333 16.4897 29.5635 16.4369 29.5833C16.3842 29.6031 16.328 29.6122 16.2717 29.61C16.2155 29.6079 16.1602 29.5945 16.1091 29.5708C16.058 29.5471 16.0121 29.5134 15.9742 29.4717L15.907 29.3978L16.4509 24.1341L26.2543 15.177C26.3028 15.1328 26.3329 15.072 26.3388 15.0067C26.3447 14.9413 26.3258 14.8761 26.286 14.824C26.2462 14.7718 26.1882 14.7365 26.1236 14.725C26.059 14.7134 25.9925 14.7265 25.937 14.7616L13.3996 22.6968L8 20.8834C7.85643 20.8351 7.73129 20.7437 7.64177 20.6215C7.55225 20.4993 7.50272 20.3524 7.49998 20.201C7.49724 20.0496 7.54143 19.901 7.62648 19.7757C7.71152 19.6503 7.83326 19.5544 7.975 19.501L29.1016 11.5425C29.2645 11.4812 29.441 11.4648 29.6125 11.495C29.784 11.5252 29.9442 11.6009 30.0764 11.7142C30.2086 11.8275 30.3079 11.9742 30.364 12.1391C30.4201 12.3039 30.4309 12.4808 30.3952 12.6513Z"
                  fill="#F57B51"
                />
              </svg>
            </a>
            <div class="userModal__email" v-if="user.acf.email !== ''">{{user.acf.email}}</div>
            <div class="userModal__phone" v-if="user.acf.phone !== ''">{{user.acf.phone}}</div>
          </div>
        </div>
        <div
          class="userModal__gallery"
          :style="{
            gridTemplateColumns: user.acf.razmery_setki.kolonki !== 0 ? 
                                  `repeat( ${user.acf.razmery_setki.kolonki} ,1fr)`
                                : 'auto',
            gridTemplateRows: user.acf.razmery_setki.stroki !== 0 ?
                                `repeat(${user.acf.razmery_setki.stroki}, 1fr)`
                              : 'auto'
          }"
        >
          <picture
            v-for="(img, index) in user.acf.gallery"
            :key="index"
            :style="{gridRow: `span ${img.stroki}`, gridColumn: `span ${img.kolonki}`}"
          >
            <img :src="img.url" :alt="img.alt" />
          </picture>
        </div>
      </div>
    </div>
  </teleport>
</template>

<script>
import { computed, watch, ref, toRefs, onMounted } from "vue";
import { useStore } from "vuex";

import "../scss/components/userModalWindow.scss";

export default {
  props: ["isOpenWindow", "userId"],

  emits: ["closeUserWindow"],

  setup(props, { emit }) {
    const store = useStore();
    const user = ref({});
    const allUsers = computed(() => store.getters.usersContainer);
    const allCourses = computed(() => store.getters.courses);
    const { isOpenWindow, userId } = toRefs(props);
    const allTags = ref([]);
    const containerWindow = ref();
    const closeBtn = ref();

    const getUserInfo = () => {
      if (isOpenWindow.value) {
        user.value = allUsers.value.find(el => el.ID === userId.value);
        if (user.value.acf.courses.length !== 0) {
          user.value.acf.courses.forEach(el => {
            allTags.value.push(allCourses.value.find(c => c.ID === el).title);
          });
        }
        if (user.value.cities.length !== 0) {
          user.value.cities.forEach(el => {
            allTags.value.push(el.title);
          });
        }
        if (user.value.countries.length !== 0) {
          user.value.countries.forEach(el => {
            allTags.value.push(el.title);
          });
        }
      }
    };

    const closeWindow = function(e) {
      if (containerWindow.value === e.target || closeBtn.value === e.target || e.path.includes(closeBtn.value)) {
        user.value = {};
        allTags.value = [];
        emit("closeUserWindow", {});
      }
    };

    watch(isOpenWindow, () => {
      if (isOpenWindow.value) {
        document.body.style.overflow = "hidden";
      } else {
        document.body.style.overflow = "auto";
      }
      getUserInfo();
    });

    return {
      user,
      allTags,
      containerWindow,
      closeBtn,
      closeWindow
    };
  }
};
</script>