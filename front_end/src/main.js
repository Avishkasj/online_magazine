import { createApp } from 'vue';
// import { createPinia } from 'pinia'; // Import createPinia once
import router from './router';
import './axios';
import './style.css';
import App from './App.vue';
import 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js';

// const pinia = createPinia();
const app = createApp(App);

// app.use(pinia); // Use pinia plugin
app.use(router); // Use router plugin

app.mount('#app');
