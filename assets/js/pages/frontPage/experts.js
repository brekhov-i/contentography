import { createApp } from "vue";
import VueLazyLoad from "vue3-lazyload";
import App from "./experts/App.vue";
import store from "./experts/store/index.js";

const app = createApp(App);

app.use(VueLazyLoad, {});

app.use(store);

app.mount("#expertsApp");
