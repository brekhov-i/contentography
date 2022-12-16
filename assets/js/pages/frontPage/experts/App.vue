<template>
  <div>
    <TabletView />
    <MobileView />
  </div>
</template>

<script>
import { computed, onMounted, ref, watch } from "@vue/runtime-core";
import { useStore } from "vuex";

import "./scss/main.scss";

import TabletView from "./views/tablet-view.vue";
import MobileView from "./views/mobile-view.vue";

export default {
  setup() {
    const store = useStore();
    onMounted(() => {
      store.dispatch("getAllExperts");
    });
  },
  components: { TabletView, MobileView },
};
</script>
