import * as Output from './../output/index.js'
import { markRaw } from 'vue'

class Table {
    constructor(fields){
        this.coluns = []

        Object.entries(fields).forEach((el) => {
          this.coluns.push({
              field: el[0],
              name: el[1].name,
              component: markRaw(this.prepare(el[1].component))
            })
        })
    }

    prepare(component){
        switch (component) {
            case 'text':
                return Output.Text
                break;

            default:
                return Output.Text
                break;
        }
    }
}

export default Table
