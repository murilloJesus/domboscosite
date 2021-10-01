import { createApp } from 'vue'

import * as Pages from './admin/pages'

const app = createApp({
    components: {
        ...Pages
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
