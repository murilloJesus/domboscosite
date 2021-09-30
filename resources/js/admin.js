import { createApp } from 'vue'
import Tabela from './admin/componentes/table.vue'
import Formulario from './admin/componentes/form.vue'
import * as Inputs from './admin/inputs/index.js'

const app = createApp({
    components: {
        Tabela,
        Formulario,
        ...Inputs
    },
    ...window.controller,
}).mount('#app')

const controller = createApp({
    data: () => {
        return {
            app
        }
    },
    mounted(){
        main();
    }
}).mount('#controller')

require('./bootstrap');
