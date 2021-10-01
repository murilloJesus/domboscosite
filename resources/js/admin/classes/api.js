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

export default Api
