@extends('layouts.admin')

@section('conteudo')
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Gerenciar páginas</h2>
                                    <p>Ver - Novo - Editar</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div id="controller" class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="top" title="Exportar" class="btn"><i
                                        class="notika-icon notika-sent"></i></button>
                                <button data-toggle="tooltip" data-placement="top" title="Tabela"
                                    v-on:click="app.component = 'tabela'" class="btn"><i
                                        class="notika-icon notika-windows"></i></button>
                                <button data-toggle="tooltip" data-placement="top" title="Novo"
                                    v-on:click="app.component = 'formulario'" class="btn"><i
                                        class="notika-icon notika-plus-symbol"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Form Element area Start-->
<div id="app">
    <tabela v-show="component == 'tabela'"></tabela>
    <formulario :fieldset="controller" v-show="component == 'formulario'">
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
                    <selector :fieldset="fieldset" field="page_id" resource="/api/pages"></selector>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <div class="form-group ">
                        <div class="nk-int-st">
                            <label for="name">Link</label>
                            <alias :fieldset="fieldset"></alias>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="cmp-tb-hd ">
                        <h2>Conteudo</h2>
                    </div>
                    <editor :fieldset="fieldset"></editor>
                </div>
            </div>
        </div>
    </formulario>
</div>
<!-- Data Table area End-->
@endsection

@section('configs')
<script>
    window.controller = {
        data: () => {
            return {
                component: 'formulario',
                controller: new Pagina()
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
            }
        }
    }

</script>
@endsection
