import Tabela from './../componentes/table.vue'
import Formulario from './../componentes/form.vue'
import * as Inputs from './../inputs/index.js'

export default {
    components: {
        Tabela,
        Formulario,
        ...Inputs
    }
}