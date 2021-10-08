import Api from './api.js'
import Table from './table.js'

class Image extends Api {
    constructor() {
        super()
        this.resources =  '/images'
    }

    getObject(instance = {}){
        return {
            id: instance.id ? instance.id : false,
            name: instance.name ? instance.name : '',
            source: instance.source ? instance.source : '',
            alt: instance.alt ? instance.alt : '',
            description: instance.description ? instance.description : '',
            created: instance.created_at ? instance.created_at : '',
            updated: instance.updated_at ? instance.updated_at : ''
        }
    }

    getTable(){
        return new Table({
            source: {
                name: '#',
                component: 'image_source',
                no_order: true
            },
            name: {
                name: 'Nome',
                component: 'text'
            },
            description: {
                name: 'Descrição',
                component: 'text'
            }
        })
    }
}

export default Image
