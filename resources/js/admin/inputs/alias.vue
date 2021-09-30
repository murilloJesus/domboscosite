<template>
  <input type="text" class="form-control" name="name" readonly :value="fieldset[field]" placeholder="Nova página">
</template>

<script>
import { ref, watch } from '@vue/runtime-core'
import axios from 'axios'
import { normalize_url } from './../../composables/helper.js'

export default {
    props: {
        fieldset: Object,
        field: {
            type: String,
            default: 'alias'
        }
    },
    setup(props){

        const path = ref('')

        async function getPath(id){
           path.value = (await axios.get(`/api/pages/${id}`)).data.alias
        }

        function setField(){
            props.fieldset[props.field] = `${path}/${normalize_url(props.fieldset.name)}`
        }

        watch(props.fieldset, async (newV, oldV) => {
            if(newV.page_id != oldV.page_id)
                await  getPath(newV)
            setField()
        })
    }
}
</script>

<style>

</style>
