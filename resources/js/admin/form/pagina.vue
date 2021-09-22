<template>
    <div class="form-element-list">
        <div class="basic-tb-hd">
            <h2>Ensino Infantil</h2>
            <p><a href="#">colegiodomboscosorocaba.com.br/segmentos/educacao_infantil</a></p>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                <div class="form-group ">
                    <div class="nk-int-st">
                        <label for="name">Nome</label>
                        <input type="text" class="form-control" name="name" v-model="fieldset.name"
                            placeholder="Nova página">
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                <div class="nk-int-mk sl-dp-mn">
                    <h2>Pai</h2>
                </div>
                <div class="chosen-select-act fm-cmp-mg">
                    <select class="chosen" data-placeholder="Escolha..." v-model="fieldset.page_id">
                        <option value="United States">United States</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Aland Islands">Aland Islands</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="American Samoa">American Samoa</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                <div class="form-group ">
                    <div class="nk-int-st">
                        <label for="name">Link</label>
                        <input type="text" class="form-control" name="name" readonly value="/segmentos/ensino_infantil"
                            placeholder="Nova página">
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="cmp-tb-hd ">
                    <h2>Conteudo</h2>
                </div>
                <div class="summernote-clickable">
                    <button class="btn btn-primary btn-sm hec-button">Editar
                    </button>
                    <button class="btn btn-success btn-sm hec-save" style="display:none;">Salvar</button>
                </div>
                <div class="summernote-wrap">
                    <div class="html-editor-click">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vehicula erat
                            sit amet aliquam vehicula. Aliquam aliquet et risus et consequat. Quisque
                            ultrices nulla eu magna vulputate, quis varius massa tempor. Suspendisse
                            sed condimentum purus, eget consequat dolor. Fusce aliquet ultricies porta. Nunc
                            semper commodo leo at maximus. Duis maximus maximus leo, id lobortis nisi
                            aliquam sit amet. Nullam vel ex id augue scelerisque congue sit
                            amet eget urna.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: ['formulario'],
        mounted(){
            initSummerNote()
        },
        computed: {
            fieldset: {
                get(){
                    return this.formulario.fieldset
                },
                set(val){
                    let formulario = this.formulario
                        formulario.fieldset = val
                    this.formulario(formulario)
                }
            }
        }
    }
</script>

<style>

</style>
