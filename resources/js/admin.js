import { createApp } from 'vue'
import Tabela from './admin/componentes/table.vue'
import Formulario from './admin/componentes/form.vue'

import { reactive } from '@vue/reactivity'

const app = createApp({
    components: {
        Tabela,
        Formulario
    },
    data: () => {
      return {
          component: 'formulario',
          controller: window.controller
      }
    },
    computed: {
        formulario: {
            get(){
                return this.controller.formulario
            },
            set(val){
                this.controller.formulario = val
            }
        }
    }
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
