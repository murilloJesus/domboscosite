import Tabela from './../componentes/table.vue'
import Formulario from './../componentes/form.vue'
import * as Inputs from './../inputs/index.js'

export default {
    components: {
        Tabela,
        Formulario,
        ...Inputs
    },
    provide(){
        return {
            save: async  () => {
                let res = await this.controller.saveData()
                if( res ){
                    swal("Salvo com Sucesso!", null, "success")
                    this.controller.getData()
                } else {
                    swal("Erro!", "Nao foi possivel concluir a solicitação.", "error")
                }
            },
            edit: (id) => {
              this.controller.getInstance(id)
              window.app.component = 'formulario'
            },
            destroy: (id) => {
                let t = this
                    swal({
                        title: "Tem certeza?",
                        text: "Você está prestes a remover um item!",
                        type: "warning",
                        showCancelButton: true,
                        confirmButtonText: "Sim, remova!",
                        cancelButtonText: "Não, cancele.",
                    }).then(async function(isConfirm){
                        if (isConfirm) {
                            let res = await t.controller.sendDestroy(id)
                            if(res){
                                swal("Removido!", null, "success")
                                t.controller.getData()
                            }else{
                                swal("Erro!", "Nao foi possivel concluir a solicitação.", "error")
                            }

                        }
                    });
            },
            reset: () => {
              this.controller.fieldset = this.controller.instance
            },
            finish: () => {
                this.controller.fieldset = this.controller.getObject()
            }
        }
    }
}
