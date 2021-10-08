<template>
    <tabela v-show="component == 'tabela'" :controller="controller"></tabela>
    <formulario :controller="controller" v-show="component == 'formulario'">
        <div class="form-element-list">
            <div class="basic-tb-hd">
                <h2>{{fieldset.id ? 'Editar Banner' : 'Novo Banner'}}</h2>
            </div>
            <div class="row">
                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                    <div class="form-group ">
                        <div class="nk-int-st">
                            <label for="name">Título</label>
                            <input type="text" class="form-control" v-model="fieldset.header"
                                placeholder="Novo Titulo">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </formulario>
</template>

<script>
import Banner from './../classes/banner.js'
import Base from './base'

export default {
    props: ['component'],
    extends: Base,
    data: () => {
        return {
            controller: new Banner()
        }
    },
    computed: {
        fieldset: {
            get() {
                return this.controller.fieldset
            },
            set(value) {
                this.controller.fieldset = value
            }
        },
        url() {
            return `${process.env.MIX_APP_DOMAIN}${this.fieldset.alias}`
        }
    }
}
</script>

<style>

</style>
