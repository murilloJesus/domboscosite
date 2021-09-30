<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="form-actions button-icon-btn button-icon-btn-cl sm-res-mg-t-30">
                    <button class="btn btn-gray gray-icon-notika btn-reco-mg btn-button-mg waves-effect"><i class="notika-icon notika-up-arrow"></i></button>
                    <button class="btn btn-gray gray-icon-notika btn-reco-mg btn-button-mg waves-effect"><i class="notika-icon notika-close"></i></button>
                    <button class="btn btn-success notika-btn-success waves-effect" @click="save"><i class="notika-icon notika-checked"></i></button>
                </div>
                <slot></slot>
            </div>
        </div>
    </div>
</template>

<script>
    import axios from 'axios'

    export default {
        props: ['fieldset'],
        methods:{
            reset(){

            },
            async save(){
                let configs = this.fieldset.store(),
                request = await axios(configs)
                console.log(request)
            }
        }
    }

</script>

<style>
    .form-actions {
        position: absolute;
        top: 10px;
        right: 30px;
    }

</style>
