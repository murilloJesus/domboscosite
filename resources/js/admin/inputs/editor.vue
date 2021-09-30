<template>
    <div class="summernote-clickable">
        <button class="btn btn-primary btn-sm hec-button" v-if="!status" @click="edit">Editar
        </button>
        <button class="btn btn-success btn-sm hec-save" v-if="status" @click="save">Salvar</button>
    </div>
    <div class="summernote-wrap">
        <div ref="editor" class="html-editor-click">
        </div>
    </div>
</template>

<script>
    import { v1 as uuidv1 } from 'uuid';

    export default {
        props: {
            fieldset: Object,
            field: {
                type: String,
                default: "content"
            }
        },
        data: () => {
            return {
                uuid: uuidv1(),
                status: false
            }
        },
        methods: {
            edit(){
                window.$(this.$refs.editor).summernote({
                    focus: !0
                })
                this.status = true
            },
            save(){
                $(this.$refs.editor).code()
                $(this.$refs.editor).destroy()

                this.fieldset[this.field] = $(this.$refs.editor).html()
                this.status = false
            }
        }
    }
</script>

<style>

</style>
