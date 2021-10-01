import Api from './api.js'
import Table from './table.js'

class Pagina extends Api {
    constructor() {
        super()
        this.resources =  '/pages'
        this.fieldset = this.getObject()
        this.dataTable = this.getTable()
    }

    getObject(instance = {}){
        return {
            id: instance.id ? instance.id : null,
            name: instance.name ? instance.name : '',
            alias: instance.alias ? instance.alias : '/',
            page_id: instance.page_id ? instance.page_id : null,
            content: instance.content ? instance.content : '',
            times_accessed: instance.times_accessed ? instance.times_accessed : 0,
            created: instance.created_at ? instance.created_at : '',
            updated: instance.updated_at ? instance.updated_at : ''
        }
    }

    getTable(){
        return new Table({
            name: {
                name: 'Nome',
                component: 'text'
            },
            alias: {
                name: 'Caminho',
                component: 'text'
            }
        })
    }
}

export default Pagina
