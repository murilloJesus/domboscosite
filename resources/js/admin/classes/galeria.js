import Api from './api.js'
import Table from './table.js'

class Galeria extends Api {
    constructor() {
        super()
        this.resources =  '/galeria'
    }

    getList(list = []){
        return list.map((el, index) => {
          return this.getObject({
              id: index,
              ...el
            })
        })
    }

    getObject(instance = {}){
        return {
            id: instance.id,
            path: instance.path ? instance.path : '',
            name: instance.name ? instance.name : '',
            image: instance.image ? instance.image : '',
        }
    }

    getTable(){
        return new Table({
            id: {
                name: '#',
                component: 'text'
            },
            image: {
                name: 'Imagem',
                component: 'imagem'
            },
            action: {
                name: 'Url',
                component: 'text'
            }
        })
    }
}

export default Galeria
