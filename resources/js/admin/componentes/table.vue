<template>
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th v-for="({name}, index) in controller.dataTable.coluns" :key="index">{{name}}</th>
                                </tr>
                            </thead>
                            <tbody>
                                <row v-for="(item, index) in rows" :key="index" :data="item" :coluns="controller.dataTable.coluns"></row>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th v-for="({name}, index) in controller.dataTable.coluns" :key="index">{{name}}</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
import Row from './row.vue'

export default {
    components: {
        Row
    },
    props: {
        controller: {
            type: Object,
            required: true
        }
    },
    data(){
        return {
            rows: []
        }
    },
    async mounted(){
        let res = await axios(this.controller.index())
        this.rows = this.controller.getList(res.data)
        this.$nextTick(() => {
            window.$('#data-table-basic').DataTable();
        })
    }
}
</script>

<style>

</style>
