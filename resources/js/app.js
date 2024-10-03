import './bootstrap';

import { createPinia } from 'pinia';

import { createApp } from "vue";

import app from "./components/App.vue";

import router from "./router";

const pinia = createPinia();

createApp(app)
    .use(pinia)
    .use(router)
    .mount("#app");
