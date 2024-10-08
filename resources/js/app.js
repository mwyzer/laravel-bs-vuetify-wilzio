import './bootstrap';
import 'bootstrap-icons/font/bootstrap-icons.css';
import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';

import { createPinia } from 'pinia';
import { createApp } from 'vue';

// Import Bootstrap and BootstrapVue3 CSS files (order is important)
import 'bootstrap/dist/css/bootstrap.css';
import 'bootstrap-vue-3/dist/bootstrap-vue-3.css';

import BootstrapVue3 from 'bootstrap-vue-3';
import VueChartkick from 'vue-chartkick';
import 'chartkick/chart.js'; // Import chartkick with chart.js for rendering

import App from './components/App.vue'; // Assuming your main component is App.vue in the components folder
import router from './router'; // Assuming you have Vue Router set up

const pinia = createPinia();

// Create the Vue app instance
const app = createApp(App);

// Use Pinia, Router, BootstrapVue3, and VueChartkick
app.use(pinia);
app.use(router);
app.use(BootstrapVue3);
app.use(VueChartkick);

// Mount the app
app.mount('#app');
