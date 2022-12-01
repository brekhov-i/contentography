import { createApp } from "vue";
import App from "./graduates/App.vue";
import store from "./graduates/store/index.js";

const app = createApp(App);

app.use(store);

app.mount("#app");
