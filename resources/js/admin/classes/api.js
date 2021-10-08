import axios from "axios"
import { reactive } from "vue"
import Table from './table.js'

class Api {
    constructor(){
        this.route = '/api'
        this.resources = '/'
        this.fieldset = this.getObject()
        this.instance = this.getObject()
        this.dataTable = this.getTable()        
        this.data = []
    }


    //CONFIGS
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

    getTable(){
        return new Table({
            id: {
                name: '#',
                component: 'text'
            },
            name: {
                name: 'Nome',
                component: 'text'
            }
        })
    }

    // PATH's
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
            data: this.fieldset
        }
    }

    update(id){
        return {
            method: 'put',
            url: `${this.route}${this.resources}/${id}`,
            data: this.fieldset
        }
    }

    destroy(id){
        return {
            method: 'delete',
            url: `${this.route}${this.resources}/${id}`
        }
    }

    //ACTION's
    async getData(){
        let res = await axios(this.index())
        return this.data = this.getList(res.data)
    }

    async getInstance(id){
        let res = await axios(this.show(id))

        this.fieldset = reactive(this.getObject(Object.assign(res.data)))
        this.instance = reactive(this.getObject(Object.assign(res.data)))
    }

    async saveData(id = this.fieldset.id){
        let res = false
        if(id){
            res = await axios(this.update(id))
        }else{
            res = await axios(this.store())
        }

        if(res) {
            this.getInstance(id)
        }

        return res
    }

    async sendDestroy(id){
        let res = await axios(this.destroy(id))
        if(res.data) return true
        else return false
    }
}

export default Api
