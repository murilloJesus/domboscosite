<template>
    <div class="summernote-clickable">
        <button class="btn btn-primary btn-sm hec-button" v-if="!status" @click="edit">Editar</button>
        <button class="btn btn-success btn-sm hec-save" v-if="status" @click="save">Salvar</button>
    </div>
    <div class="summernote-wrap">
        <div ref="editor" class="html-editor-click">
        </div>
    </div>
</template>

<script>
    import axios from 'axios';
    import Image from "./../classes/image.js";

    export default {
        props: {
            fieldset: Object,
            value: String,
            field: {
                type: String,
                default: "content"
            }
        },
        data: () => {
            return {
                status: false,
                imagem: new Image()
            }
        },
        methods: {
            edit(){
                let t = this
                window.$(this.$refs.editor).summernote({
                    focus: !0,
                    onImageUpload: function(files, editor, welEditable) {
                        t.sendFile(files[0],editor,welEditable)
                    }
                })
                this.status = true
            },
            save(){
                $(this.$refs.editor).code()
                $(this.$refs.editor).destroy()

                this.fieldset[this.field] = $(this.$refs.editor).html()
                this.status = false
            },
            async sendFile(file, editor, welEditable) {
                this.imagem.file = file
                await this.imagem.saveData()
                editor.insertImage(welEditable, this.imagem.fieldset.source);
            }
        },
        watch: {
            value: function(newV, oldV) {
                if(newV !== oldV){
                    $(this.$refs.editor).html( this.fieldset[this.field] )
                }
            }
        }
    }
</script>

<style>

</style>
