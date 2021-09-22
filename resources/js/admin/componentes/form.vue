<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <component :is="formulario.component" :formulario="formulario" />
            </div>
        </div>
    </div>
</template>

<script>
import Pagina from './../form/pagina.vue'

export default {
    props: ['formulario'],
    components: {
        Pagina
    }
}

</script>

<style>

</style>
