<template>
    <div class="chosen-select-act fm-cmp-mg">
        <select ref="select" class="chosen" data-placeholder="Escolha..." v-model="fieldset[field]">
            <option value="">Selecione...</option>
            <option v-for="(item, index) in filteredList" :value="item.id" :key="index">{{item.name}}</option>
        </select>
    </div>
</template>

<script>
import axios from 'axios'

export default {
    data(){
        return {
            lista: []
        }
    },
    props: {
        fieldset: Object,
        list: {
            type: [Array, Boolean],
            default: false,
        },
        resource: {
            type: [String, Boolean],
            default: false,
        },
        field: {
            type: String,
            default: "content"
        }
    },
    async mounted(){
        if(this.list){
            this.lista = this.list
        }else if(this.resource){
            this.lista = (await axios.get(this.resource)).data
        }
        window.$(this.$refs.select).on('change', () => {
            this.fieldset[this.field] = parseInt($(this.$refs.select).val())
        })
    },
    updated(){
        window.$(this.$refs.select).trigger("chosen:updated");
    },
    computed: {
        filteredList(){
            return this.resource ? this.lista.filter(el => el.id != this.fieldset.id) : this.lista
        }
    }
}
</script>

<style>

</style>
