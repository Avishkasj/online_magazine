import { createApp } from 'vue';
// import { createPinia } from 'pinia'; // Import createPinia once
import router from './router';
import './axios';
import './style.css';
import App from './App.vue';

// const pinia = createPinia();
const app = createApp(App);

// app.use(pinia); // Use pinia plugin
app.use(router); // Use router plugin

app.mount('#app');
