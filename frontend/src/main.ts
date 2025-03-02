import { createApp } from "vue";
import App from "./App.vue";
import router from "./router";
import store from "./store";

// import bootstrap all configuration css and js
import "bootstrap/dist/css/bootstrap.min.css";
import "bootstrap";

// createApp(App).use(store).use(router).mount("#app");

const app = createApp(App);

app.use(store);
app.use(router);

app.mount("#app");
