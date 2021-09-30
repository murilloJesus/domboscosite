class Api {
    constructor(){
        this.route = '/api'
        this.resources = '/'
        this.fieldset = this.getObject()
    }

    getList(list = []){
        return list.map((el) => {
          return this.getObject(el)
        })
    }

    getObject(instance){
        return {
            id: instance.id ? instance.id : null,
            name: insatance.name ? instance.name : '',
        }
    }

    getData(){
        return this.fieldset
    }

    index(){
        return {
            method: 'get',
            url: `${this.route}${this.resources}`
        }
    }

    show(id){
        return {
            method: 'get',
            url: `${this.route}${this.resources}/${id}`
        }
    }

    store(){
        return {
            method: 'post',
            url: `${this.route}${this.resources}`,
            data: this.getData()
        }
    }

    update(id){
        return {
            method: 'put',
            url: `${this.route}${this.resources}/${id}`,
            data: this.getData()
        }
    }

    destroy(id){
        return {
            method: 'delete',
            url: `${this.route}${this.resources}/${id}`
        }
    }
}

class Pagina extends Api {
    constructor() {
        super()
        this.resources =  '/pages'
        this.fieldset = this.getObject()
    }

    getObject(instance = {}){
        return {
            id: instance.id ? instance.id : null,
            name: instance.name ? instance.name : '',
            alias: instance.alias ? instance.alias : null,
            page_id: instance.page_id ? instance.page_id : null,
            content: instance.content ? instance.content : '',
            times_accessed: instance.times_accessed ? instance.times_accessed : 0,
            created: instance.created_at ? instance.created_at : '',
            updated: instance.updated_at ? instance.updated_at : ''
        }
    }

}

