import './bootstrap';
import Vue from 'vue';
import vuetify from "@/js/plugins/vuetify";
import Vuetify from "vuetify/lib";

//Route ingormation for Vue Router
import Routes from '@/js/routes.js';
//Component file
import App from '@/js/views/App.vue';

Vue.use(Vuetify);
console.error('Instancia de vuetify --> ', Vuetify)

const app = new Vue({
    router: Routes,
    vuetify,
    render: h => h(App),
}).$mount('#app')

export default app;
