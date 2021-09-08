import { createApp } from 'vue'
import Banner from './componentes/Banner.vue';
import Depoimentos from './componentes/Depoimentos.vue';
import Colegio from './componentes/Colegio.vue';
import Galeria from './componentes/Galeria.vue';

const app = createApp({
    components: {
        Banner,
        Depoimentos,
        Colegio,
        Galeria
    },
    mounted(){
        util()
        main()
    }
}).mount('#app');

require('./bootstrap');
