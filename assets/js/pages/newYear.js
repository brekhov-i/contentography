import { createApp } from "vue";
import App from "./newYear/App.vue";
import store from "./newYear/store/index.js";

const app = createApp(App);

app.use(store);

app.mount("#app");
