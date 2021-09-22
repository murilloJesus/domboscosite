import { createApp } from 'vue'
import Banner from './componentes/Banner.vue';
import Depoimentos from './componentes/Depoimentos.vue';
import Conteudo from './componentes/Conteudo.vue';
import Galeria from './componentes/Galeria.vue';

const app = createApp({
    components: {
        Banner,
        Depoimentos,
        Conteudo,
        Galeria
    },
    mounted(){
        util()
        main()
    }
}).mount('#app');

require('./bootstrap');
